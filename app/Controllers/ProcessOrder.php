<?php

namespace App\Controllers;
use App\Models\Product;


class ProcessOrder extends BaseController {
    public function porder() {
        $orderid = 'W20161030STEP082314';
        $token = 123456;
        
        $db = \Config\Database::connect();
        $qry = "select c.product_new_icon, c.offer_price, b.user_name, b.email, b.phone, b.user_id, c.product_name, c.product_id, c.product_name_slug, a.user_id, a.product_id, a.coupon_code, a.order_id, a.payment_amount FROM user_transaction AS a JOIN user AS b ON a.user_id = b.user_id JOIN product AS c ON c.product_id = a.product_id WHERE a.order_id = '$orderid'";
        $query = $db->query($qry);
        $pdata = $query->getRow();
        print_r($pdata);

        if ($pdata !== null) {
            $client = \Config\Services::curlrequest();

            $resp = $client->post('https://api.thehindustep.in/processpayment', [
                'form_params' => [
                    'ORDERID' => $orderid,
                    'ISWEB' => 'yes',
                    'payment_type' => 'paytm'
                ],
                'headers' => [
                    'platform' => 'w1',
                    'access-token' => $token
                ]
            ]);

            $dataT = json_decode($resp->getBody(), true);

            $failureArray = ['payment failure', 'Oops, something went wrong. Please try again', 'Oops, something went wrong. Please try again'];
            
                if ($dataT !== null && isset($dataT['message']) && in_array($dataT['message'], $failureArray)) {                return view('adminpanel/pfailure', [
                    'coupon' => $pdata->coupon_code,
                    'purl' => $pdata->product_name_slug,
                    'product' => $pdata->product_name,
                    'pamount' => $pdata->payment_amount,
                    'user' => $pdata->user_name,
                    'pdata' => $pdata
                ]);
            }

            if ($dataT['message'] === "Payment already processed") {
                return view('processedpayment', ['pdata' => $pdata]);
            } elseif ($dataT['code'] == 200) {
                return view('psuccess', [
                    'coupon' => $pdata->coupon_code,
                    'purl' => $pdata->product_name_slug,
                    'product' => $pdata->product_name,
                    'pamount' => $pdata->payment_amount,
                    'user' => $pdata->user_name,
                    'pdata' => $pdata
                ]);
            }
        }

        return "permission denied";
        
    }
    public function ieltsPreview() {
        $user_name ='gpjothiraman1972@gmail.com';
        print_r($user_name);
        $model = model(Product::class);

        $result = $model->registerforPreview($user_name);
        return $result;
    }

    public function testJson() {
        $uri = "https://assets.thehindustep.in/files/data.json";
        $client = \Config\Services::curlrequest(); 
        try {
            $uResponse = $client->request('GET', $uri);      
            echo $uResponse->getBody();
            print_r($uResponse);
        } catch (\Exception $e) {
            return "Connection Error";
        }
        $request = new CurlRequest();
        $request->setUrl('https://assets.thehindustep.in/files/data.json');
        $response = $request->get();
        print_r($response);



        $Jresponse = $uResponse->getBody();
        try {
            $pdata = json_decode($Jresponse, true);
        } catch (\Exception $e) {
            return view('404.html'); 
        }

        $headers = $pdata['mail']['headers'];
        echo '<pre>';
        print_r($headers);
        $l = null;
        foreach ($headers as $item) {
            if ($item['name'] === 'User-Agent') {
                $l = $item['value'];
                break;
            }
        }
        
        if ($l !== null) {
            $userID = $l;
            echo $userID;
        }

        return "ok";
    }  



}
?>