<?php
namespace App\Models;
use CodeIgniter\Model;
global $curl_client;
$curl_client = \Config\Services::curlrequest();
//var_dump($client);

class Product extends Model {
    protected $table = 'product';
    
    public function fetchProductData() {
        $db = \Config\Database::connect();

        $sql = "select * from product where product_id in ('607','617','600','651' ) order by field(product_id,600, 607, 617, 651)";

        $query = $db->query($sql);

        $productData = $query->getResultArray();

        return $productData;
    }

    public function fetchProductKids() {
        $db = \Config\Database::connect();

        $sql = "select * from product where product_id in ('651','652') order by field(product_id,651, 652)";

        $query = $db->query($sql);

        $productData = $query->getResultArray();

        return $productData;
    }

    public function getCourse($product_name_slug = null) {

        //echo $product_name_slug;

        if ($product_name_slug == 'steplearn'){
            $product_id = [600,639,608];           
            return $this->whereIn('product_id', $product_id)->orderBy('FIELD(product_id, ' . implode(',', $product_id) . ')')->findAll();
        }    
        else if ($product_name_slug == 'stepforworkingprofessionals') {
            $product_id = [607,608];
            return $this->whereIn('product_id', $product_id)->orderBy('FIELD(product_id, ' . implode(',', $product_id) . ')')->findAll();
        }
         else if ($product_name_slug == 'stepforcompexams') {
            $product_id = [617,608];
            return $this->whereIn('product_id', $product_id)->orderBy('FIELD(product_id, ' . implode(',', $product_id) . ')')->findAll();
        }
        else if ($product_name_slug == 'stepforielts') {
            $product_id = [638];
            return $this->whereIn('product_id', $product_id)->orderBy('FIELD(product_id, ' . implode(',', $product_id) . ')')->findAll();
        }
       else{
             return $this->where('product_name_slug', $product_name_slug);
        }
       
       }
    

    public function fetchProduct($slug) {
        $query = $this->where('product_name_slug', $slug);
        
        /*if ($pid) {
            $query->where('product_id', $pid);
        }*/
        
        return $query->findAll(); 
    }


     public function getExploreProducts($product_name_slug) {

        if ($product_name_slug == 'steplearn'){
            $product_id = [607,638,617];
            return $this->whereIn('product_id', $product_id)->findAll();
        }    
        else if ($product_name_slug == 'stepforworkingprofessionals') {
            $product_id = [600,638,617];
            return $this->whereIn('product_id', $product_id)->findAll();
        }
        else if ($product_name_slug == 'stepforcompexams') {
            $product_id = [607,600,638];
            return $this->whereIn('product_id', $product_id)->findAll();
        }
        else if ($product_name_slug == 'stepforielts') {
            $product_id = [600,607,617];
            return $this->whereIn('product_id', $product_id)->findAll();
        }
       else{
             return $this->where('product_name_slug', $product_name_slug);
        }
       
       }

/*        $query = $this->where('product_name_slug', $slug);
*/        
        /*if ($pid) {
            $query->where('product_id', $pid);
        }*/
        
        //return $query->findAll(); 
   



/*
     public function fetchProduct() {
        $db = \Config\Database::connect();

        $sql = "select min(offer) from product where product_id in ('632')";

        $query = $db->query($sql);

        $productData = $query->getResultArray();

        return $productData;
    }*/
    public function getUnlimited() {
        $db = \Config\Database::connect();

        $sql = "select * FROM product where product_id in ('613','634')";

        $query = $db->query($sql);

        $unlimitedDetails = $query->getResultArray();
        #print_r($CourseDetails);

        return $unlimitedDetails;
    }

      public function getCourseDetails() {
        $db = \Config\Database::connect();

        $sql = "select * FROM product where product_id in ('617','608','638','607','600','639','634','613')";

        $query = $db->query($sql);

        $CourseDetails = $query->getResultArray();
        #print_r($CourseDetails);

        return $CourseDetails;
    }

   public function getProductSlug($slug) {
        $db = \Config\Database::connect();

        $sql = "SELECT * FROM product WHERE product_name_slug = ?";

        $query = $db->query($sql, [$slug]);

        $getProductSlug = $query->getResultArray();
        #print_r($CourseDetails);

        return $getProductSlug;
    }

    public function fetchProductDataBySlug($slug)
    {
        return $this->where('product_name_slug', $slug)->first(); 
    }



    public function getProductMap1($productID) {
        $db = \Config\Database::connect();
        $query = $db->query("select product_id, product_map_id from product_map WHERE product_id = '$productID' ");
        
        #echo "Connected DB";
        $data = $query->getResult();
         #print_r($data);
         return $query->getResult();

    }
   

    public function getProductlearn($primaryProduct, $secondaryProduct) {
        $db = \Config\Database::connect();
        $query = $db->query("select id, topic_name, description, product_id  from product_learn_info where product_id = '$primaryProduct' or product_id = '$secondaryProduct' ORDER BY LENGTH(topic_name) ASC");
        
        echo "Connected DB";
        $data = $query->getResult();
        #print_r($data);
        return $query->getResult();

    }
    public function getProductDetailsInfo($primaryProduct, $secondaryProduct) {
        $db = \Config\Database::connect();
        $query = $db->query("select id, topic_name,s_description, description, product_id  from product_details_card_info where product_id = '$primaryProduct' or product_id = '$secondaryProduct' ORDER BY LENGTH(topic_name) ASC");
        
        echo "Connected DB";
        $data = $query->getResult();
        #print_r($data);
        return $query->getResult();

    }

    
    
    public function getCourseContent() {
        $db = \Config\Database::connect();

        $sql = "select id,topic_name,description from product_learn_info where id IN ('11','44','14','20' )";

        $query = $db->query($sql);

        $productDetails = $query->getResultArray();

        return $productDetails;
    }
  
    

    public function checkPurchaseStatus($uid) {
        $db = \Config\Database::connect();
        $query = $db->query("select b.product_name from user_transaction as a JOIN product as b ON a.product_id = b.product_id  where a.user_id = '$uid' and transaction_status='TXN_SUCCESS' order by a.transaction_id desc LIMIT 1");
        $purchaseData = $query->getRow();
        print_r($purchaseData);
        $pname = null;
        if($purchaseData != null){
            return $purchaseData->product_name;
        }
        return $pname;
   
        echo "Connected DB";
        $data = $query->getResult();
        print_r($data);
        return $query->getResult();
    }

   
   public function startTransaction($product_id, $coupon_code, $user_name) {

    global $curl_client;

    $db = \Config\Database::connect();
    $user_name = trim($user_name);

    if ($user_name === "") {
        return [
            "status" => "error",
            "message" => "Email / Phone cannot be empty",
            "coupon" => $coupon_code
        ];
    }

    $valid_email = filter_var($user_name, FILTER_VALIDATE_EMAIL);
    $valid_num = preg_match('/^[0-9]+$/', $user_name);


    if (!($valid_email || ($valid_num && (strlen($user_name) == 10 && $user_name[0] >= '6')))) {
        return [
            "status" => "error",
            "message" => "Email / Phone is invalid",
            "coupon" => $coupon_code
        ];
    }

    $qry = "select * from user where user_name = ? or email = ? or phone = ? limit 1";
    $user = $db->query($qry, [$user_name, $user_name, $user_name])->getRow();

    if ($user !== null) {
        $pin = $user->pin;
       $qry = "update user set user_name = ?, pin_expiry_date = date_add(NOW(), INTERVAL 1 YEAR), reference = 'guest' where user_id = ?";
        $db->query($qry, [$user_name, $user->user_id]);
        $nUser = false;
        $uid = $user->user_id;
    } else {
        $pin = rand(100000, 999999);
        $col_name = $valid_email ? 'email' : 'phone';
      $qry = "insert into user (user_name, $col_name, pin, pin_expiry_date, active, account_type, reference, full_name) values (?, ?, ?, DATE_ADD(NOW(), INTERVAL 1 YEAR), 'Y', 'Student', 'guest', ?)";
        $db->query($qry, [$user_name, $user_name, $pin, $user_name]);
    }

     $loginRes=$curl_client->request('POST', API_URL.'/v1/login', ['form_params' => ['login_id' => $user_name, 'pin' => $pin, 'keepalive' => true],]);

    if ($loginRes->getStatusCode() !== 200) {
        return ["status" => "error", "message" => "Unable to proceed further. Please contact customer care", "coupon" => $coupon_code];
    }

    $responseJson=$loginRes->getBody();
     $respArr=json_decode($responseJson,true);

    $token = $respArr["data"]["token"];
    $new_user = $respArr["data"]["new_user"];


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, API_URL."v1/products/$product_id");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'access-token:'.$token;
    $headers[] = 'platform: w1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
    $resArr=json_decode($result,true);
    #print_r($resArr);


    if (count($resArr["data"]) <= 0) {
        return ["status" => "error", "message" => "Product is not available for you. Please contact customer care", "coupon" => $coupon_code];
    }
    $forgrtPassRes=$curl_client->request('POST', API_URL.'/v1/forgotpassword', ['form_params' => ['user_name' => $user_name, 'center_code' => ''],]);

    return ["status" => "success", "token" => $token, "new_user" => $new_user];
}
 public function payment($orderid) {
        $db = \Config\Database::connect();
        $query = $db->query("select c. product_new_icon, c.offer_price, b.user_name, b.email, b.phone,  b.user_id, c.product_name, c.product_id,c.product_name_slug, a.user_id, a.product_id, a.coupon_code, a.order_id, a.payment_amount from user_transaction as a JOIN user as b ON a.user_id=b.user_id JOIN product as c ON c.product_id=a.product_id where a.order_id='$orderid'");

        $pdata = $query->getRow();
        //print_r($pdata);
        
        return $pdata;
     }

}

   


?>

