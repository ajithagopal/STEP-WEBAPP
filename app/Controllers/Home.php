<?php
namespace App\Controllers;
use App\Models\Product;
/*use App\Libraries\IP2Location;*/
use CodeIgniter\Controller;
use App\Libraries\JsonDataFetcher;
global $curl_client;
$curl_client = \Config\Services::curlrequest();
#define("API_URL", "https://api.steptest.in/", true);

class Home extends BaseController {

    public function index() {
        //$this->cachePage(3600);
        $model = model(Product::class);

        //$ipAddress = $_SERVER['REMOTE_ADDR'];
        $countryCode = "IN";
       //$countryCode_custom = session()->get('countryCode_custom');
         //var_dump( 'this is countryCode_custom', $countryCode_custom);
           
       //if ($countryCode_custom == NULL) {
           //$ipAddress = $_SERVER['REMOTE_ADDR'];

           /*$ip2locationService = new IP2Location();
           $countryCode = $ip2locationService->getCountryCode($ipAddress);*/
           //$ipAddress = '115.240.90.163';


           session()->set('countryCode', $countryCode);
           //print_r($_SESSION);
       //} else {
           //$countryCode = $countryCode_custom;
           //session()->set('countryCode', $countryCode);
           //print_r($_SESSION);
       //}

       //echo $countryCode ;

       //print_r($_SESSION);
        $productData = $model->fetchProductData();
        $data = [
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/index', $data);
    }

    public function kids() {
        $model = model(Product::class);

        $countryCode = "IN";
   
        $productData = $model->fetchProductKids();
        $data = [
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/kids', $data);
    }


   

    
    public function privacy(){
        session()->set('countryCode', 'IN');
        return view('templates/privacy');

    }

    public function contactus(){
        session()->set('countryCode', 'IN');
        return view('templates/contactus');

    }

    public function termsandconditions(){
        session()->set('countryCode', 'IN');
        return view('templates/termsandconditions');

    }

    
    
   
   public function india(){
    $model = model(Product::class);
    session()->set('countryCode', 'IN');
    session()->set('countryCode_custom', 'IN');
   /* echo($_SERVER['HTTP_REFERER']);
    die();*/
     return redirect()->to($_SERVER['HTTP_REFERER']); 
    //return redirect()->to($_SERVER['HTTP_REFERER']); 
    }
    public function international(){
        $model = model(Product::class);
        session()->set('countryCode', 'INT');
        session()->set('countryCode_custom', 'INT');
         /*echo($_SERVER['HTTP_REFERER']);


         print_r($_SESSION);
        die();*/
        return redirect()->to($_SERVER['HTTP_REFERER']); 
    }

    public function ogproductpage($productSlug){

        $model = model(Product::class);

        $productData = $model->fetchProductDataBySlug($productSlug);
        $courseDetails = $model->getProductSlug($productSlug);
        //$getProductSlug = $model->getProductSlug($productSlug);
        //$courseDetails = $model->getCourseDetails();
        //$productData = $model->fetchProductData();
        $countryCode = session()->get('countryCode');
       
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        //$this->load->view("first_access");
        return view('templates/product_page' ,$data);

    }

     public function productPage()
    {
        $model = model(Product::class);

        //$productData = $model->fetchProductDataBySlug($productSlug);

        //$getProductSlug = $model->getProductSlug($productSlug);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = session()->get('countryCode');
       
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/product',$data);

    }
      public function product($productSlug)
    {
        //$this->cachePage(3600);
        $countryCode = "IN";
        session()->set('countryCode', $countryCode);
        $url = PRODUCT_STORAGE_URL .$productSlug.'.json' ;

        $response = file_get_contents($url);
        /*echo $response;
        die();*/
        //$obj  = json_decode($json);
        $pdata = json_decode($response, true);
        $originalPrice = (int)$pdata['data']['original_price'];
        $offerPrice = (int)$pdata['data']['offer_price'];

       
        //echo $pdata;
        //echo $originalPrice;
        //echo json_encode($obj, JSON_PRETTY_PRINT);
        $installPrice = 0;
        $fortypercent = 0;
        $twentypercent = 0;

        if (isset($pdata['data']['subscription_price'])){ 
            $installPrice = (int)$pdata['data']['subscription_price'];
            $fortypercent = 0.40*(int)$pdata['data']['subscription_price'];
            $twentypercent = 0.20*(int)$pdata['data']['subscription_price'];
        }
        if($originalPrice != $offerPrice){
            $offerPercent = round((($originalPrice - $offerPrice)/$originalPrice)*100);
        }
        else{
            $offerPercent = 0;
        }

        $couponEvent = "apply_coupon";
        $couponValue = "";

        if (isset($_GET['apply_coupon'])) {
        $couponValue = $_GET['apply_coupon'];
        $couponEvent = "auto_apply_coupon";
        }




        if (isset($pdata['data']['product_meta_title'])){
            $siteTitle = $pdata['data']['product_meta_title'];
            $siteDesc = $pdata['data']['product_meta_desc'];
            $siteKeywords = $pdata['data']['product_meta_keywords'];
            $siteMetaimg = $pdata['data']['product_meta_img'];
        }else{
            $siteTitle = "Learn English Online | Beginner to Advanced Courses | Online Certification | STEP - The Hindu";
            $siteDesc = "Best online English courses personalised based on your strengths and weaknesses. Start for free today.";
            $siteKeywords = "online English test, online English training, online English language skills, free online English test, free English courses, online English grammar training, online English grammar practice, free online English level";
            $siteMetaimg = "https://storage.googleapis.com/assets.thehindustep.in/img/step-the-hindu.jpg";
        }

        $Data = [

            'siteTitle' => $siteTitle,
            'siteDesc' => $siteDesc,
            'siteKeywords' => $siteKeywords,
            'siteMetaimg' => $siteMetaimg,
            'offerPercent' => $offerPercent,
            'timerData' => $pdata['data']['timer'],
            'sitetype'=> 'product',
            'is_subscription'=> '0',
            'installPrice'=> (int)$installPrice,
            'forty'=> (int)$fortypercent,
            'twenty'=> (int)$twentypercent,
            'countryCode' => session()->get('countryCode'),
            'geoblockmsg' => 'Our system indicates that you are trying to purchase this product from a country or region in which it is not currently available',
        ];


        //die();
        /* $model = model(Product::class);
        $productData = $model->fetchProductDataBySlug($productSlug);
        $courseDetails = $model->getProductSlug($productSlug);*/
        //$getProductSlug = $model->getProductSlug($productSlug);
        //$courseDetails = $model->getCourseDetails();
        //$productData = $model->fetchProductData();
        $countryCode = session()->get('countryCode');
       
        $data = [
            'countryCode' => $countryCode,
            'resultdata' => $Data,
            'productData' => $pdata['data'],
            'couponEvent' => $couponEvent, 
            'couponValue' => $couponValue
        ];

       /* print_r($data);
        die();*/

        return view('templates/product',$data);

    }

public function securepayment() {
    $model = model(Product::class);

    if ($this->request->isAJAX()) { 
        $user_name = $this->request->getPost('email');
        $product_id = $this->request->getPost('txtProductId');
        $coupon_code = trim($this->request->getPost('coupon'));
        //$product_id=607;
    
        $result = $model->startTransaction($product_id, $coupon_code, $user_name);

        return json_encode($result);
    }
}


public function securepaymentweb() {
    $model = model(Product::class);

    if ($this->request->isAJAX()) { 
        $user_name = $this->request->getPost('txtEmail');
        $product_id = $this->request->getPost('txtProductId');
        $coupon_code = trim($this->request->getPost('txtCoupon'));
        //$product_id=607;
    
        $result = $model->startTransaction($product_id, $coupon_code, $user_name);

        return json_encode($result);
    }
}



public function porder(){
    $model = model(Product::class);

   
        /*$orderid = "W20231102STEP082557IIEEJ";
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjIwMTQyNzM1NTYsInVzZXJfaWQiOjIwODAwNzl9.h_lpQcZhSu30JlS47fv03k1A9jcKZ989kyLk9vQaniE";*/
        $orderid = $this->request->getGet('orderid');
        $token = $this->request->getGet('token');
        $pdata = $model->payment($orderid);
        $pdata = (array) $pdata;
    /*    $data['pdata'] = $pdata;
        print_r($pdata);
        die();*/


        if ($pdata != null){
            $curl = curl_init();
            $api_url = API_URL; 
            //print_r($api_url);
            
            $payment_endpoint = 'v1/processpayment';
            
            $api_endpoint = $api_url . $payment_endpoint;
            //print_r($api_endpoint);
            $payload = json_encode([
                "ORDERID" => $orderid,
                "ISWEB" => "yes",
                "payment_type" => "paytm"
            ]);
            $ch = curl_init();
            if ($ch === false) {
                die('cURL initialization .');
            }
            curl_setopt($ch, CURLOPT_URL, $api_endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $headers = array(
            'Content-Type: application/json',
            'platform'=>'w1',
            'access-token:' . $token
        );
           
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);

            
            $resArr=json_decode($result,true);
            //print_r('resArr',$resArr);
            //die();

          if ($resArr === false) {
                return "API request failed";
            }    
            /*if (isset($resArr['message'])) {
                echo 'Message: ' . $resArr['message'];
            }else{
                echo 'none';
            }
*/

            if (isset($resArr['message']) && trim($resArr['message'])=="payment failure', 'Oops, something went wrong. Please try again','Oops, something went wrong. Please try again"){
                return view('templates/pfailure',['coupon'=>$pdata['coupon_code'], 'purl' => $pdata['product_name_slug'], 'product'=>$pdata['product_name'], 'pamount'=> $pdata['payment_amount'], 'user'=>$pdata['user_name'], 'pdata'=>$pdata ]);

               }

            if(isset($resArr['message']) && $resArr['message'] == "Payment already processed"){
                 return view('templates/processedpayment',['coupon'=>$pdata['coupon_code'], 'purl' => $pdata['product_name_slug'], 'product'=>$pdata['product_name'], 'pamount'=> $pdata['payment_amount'], 'user'=>$pdata['user_name'], 'pdata'=>$pdata ]);
            }
               elseif(isset($resArr['code']) && trim($resArr['code'])== 200){
                return view('templates/psuccess', ['coupon'=>$pdata['coupon_code'], 'purl' => $pdata['product_name_slug'], 'product'=>$pdata['product_name'], 'pamount'=> $pdata['payment_amount'], 'user'=>$pdata['user_name'], 'pdata'=>$pdata ]);
               }
            }
         

        }


    


    
}

?>

