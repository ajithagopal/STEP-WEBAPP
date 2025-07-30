<?php
namespace App\Controllers;
use App\Models\Product;
use App\Libraries\IP2Location;
use CodeIgniter\Controller;
use App\Libraries\JsonDataFetcher;
global $curl_client;
$curl_client = \Config\Services::curlrequest();
#define("API_URL", "https://api.steptest.in/", true);

class ProductDetails extends BaseController {


//Product intro pages 
	 public function generalcommunication(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/gc-table',$data);

    }

       public function workingProfessional(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/working-professional',$data);

    }


    public function examprep(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/exam-prep',$data);

    }


     public function ieltsprep(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/ielts-prep',$data);

    }


//product intro common page 

    public function productTable($product_slug_name){

       /* print("chan");
        die();*/
        $model = model(Product::class);

        //$pid = $this->request->getGet('pid');

        $uri = service('uri');

        $product_slug_name = $uri->getSegment(1);
        //echo $product_slug_name;


	    $courseDetails = $model->getCourse($product_slug_name); 
	    $productData = $model->fetchProduct($product_slug_name); 

        $exploreData = $model->getExploreProducts($product_slug_name); 

        $unlimitedDetails = $model->getUnlimited(); 



	  /* print_r(round($unlimitedDetails[0]['original_price']));

        die;*/
       
        $pid =  $productData[0]['product_id'];




        if ($pid == 600){
        $productLinks = [600 => 'general-communication-online' ,639 => 'general-communication-crash-course', 608 => 'general-communication-unlimited']; 
        $productDetails = ['product_title' => 'General Communication','product_sub_para' => 'Courses focus on English language skills for daily communication.',600 => ['product_name' => 'Online','coach_calls' => 'None','live_calls' => 'None','online_classes' => '40 hours','Validity'=>'3 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Can only manage flexible online lessons','offer_price' => 0],639 =>['product_name' => 'Crash Course','coach_calls' => '6','live_calls' => '6','online_classes' => '20 hours','Validity'=>'6 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Want flexible online lessons PLUS some personalised one-on-one coaching and interactive live session with experienced trainer','offer_price' => 0],608 => ['product_name' => 'Unlimited','coach_calls' => 'Unlimited','live_calls' => 'Unlimited','online_classes' => '60 hours','Validity'=>'3/6/12 months','course_covers'=>'- speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Want flexible online lessons PLUS unlimited personalised one-on-one coaching and interactive live session with experienced trainer','offer_price' => 0]];
        }elseif($pid == 607){

            //working Professional
            $productLinks = [607 => 'working-professional-crash', 608 => 'working-professional-unlimited']; 
            $productDetails = ['product_title' => 'Working Professionals','product_sub_para' => 'Courses focusing on English language skills for the workplace.',607 =>['product_name' => 'Crash Course','coach_calls' => '6','live_calls' => '6','online_classes' => '20 hours','Validity'=>'3 months','course_covers'=>'- workplace skills  <br/>  - speaking skills <br/> - listening skills <br/>  - reading skills <br/>  - writing skills <br/> - grammar <br/> - vocabulary','sub_para' => 'Can only manage flexible online lessons','offer_price' => 0],608 => ['product_name' => 'Unlimited','coach_calls' => 'Unlimited','live_calls' => '12 hours','online_classes' => '20 hours','Validity'=>'3/6/12 months','course_covers'=>'- workplace skills <br/> - speaking skills <br/> - listening skills <br/>  - reading skills <br/> - writing skills <br/> - grammar <br/> - vocabulary','sub_para' => 'Want flexible online lessons PLUS unlimited personalised one-on-one coaching and interactive live session with experienced trainer','offer_price' => 0],613 => ['original_price' => 21999,'offer_price' => 13999,'original_price_usd' => 1000,'offer_price_usd' => 500],634 => ['original_price' => 12999,'offer_price' => 10999,'original_price_usd' => 500,'offer_price_usd' => 300]];
       }elseif($pid == 617){
            //Exam preparation 
            $productLinks = [617 => 'exam-preparation-crash-course',  608 => 'exam-preparation-unlimited']; 

            $productDetails = ['product_title' => 'Competitive Exams','product_sub_para' => 'Courses focusing on English language skills for success in national level <br/>competitive exams: UPSC (Prelims and Mains), IBPS/Bank (PO and Clerical),<br/> SSC (CGL and CHSL), and other government exams (Insurance, CDS, etc.)',617 =>['product_name' => 'Crash Course','coach_calls' => 'None','live_calls' => 'None','online_classes' => '10 hours','Validity'=>'3 months','course_covers'=>'- interview skills <br /> - exam tips and tricks <br /> - speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Can only manage flexible online lessons','offer_price' => 0],608 => ['product_name' => 'Unlimited','coach_calls' => 'Unlimited','live_calls' => '12','online_classes' => '60 hours','Validity'=>'3/6/12 months','course_covers'=>'- interview skills <br /> - exam tips and tricks <br /> - speaking skills <br /> - listening skills <br /> - reading skills <br /> - writing skills <br /> - grammar <br /> - vocabulary','sub_para' => 'Want flexible online lessons PLUS unlimited personalised one-on-one coaching and interactive live session with experienced trainer','offer_price' => 0],613 => ['original_price' => 21999,'offer_price' => 13999,'original_price_usd' => 1000,'offer_price_usd' => 500],
                634 => ['original_price' => 12999,'offer_price' => 10999,'original_price_usd' => 500,'offer_price_usd' => 300]];
       }elseif($pid == 638){
            //IELTS
            $productLinks = [638 => 'ielts-preparation']; 

            $productDetails = ['product_title' => 'IELTS Preparation','product_sub_para' => 'A unique course focusing on the speaking section of the IELTS both the academic and general tests.',638 =>['product_name' => 'Crash Course','coach_calls' => '31','online_classes' => '10 hours','reference_material' => 'Yes','Validity'=>'3 months','course_covers'=>'- IELTS Speaking exam tips & tricks <br / > - speaking skills <br / > - grammar <br /> - vocabulary','sub_para' => 'Want to ace your IELTS Speaking test','offer_price' => 0]];
       }

            /*$courseDetails = $model->getCourseDetails();
            $productData = $model->fetchProductData();*/
            $countryCode = session()->get('countryCode');
            $data = [
                'CourseDetails' => $courseDetails,
                'countryCode' => $countryCode,
                'productData' => $productData,
                'productSlug' => $product_slug_name,
                'pid' => $pid,
                'productLinks' => $productLinks,
                'productDetails' => $productDetails,
                'exploreData' => $exploreData 
            ];

    /*
         print_r($data);

            die ;*/

            return view('templates/product_table',$data);

        }    


    public function forcorporate(){
        session()->set('countryCode', 'IN');
        return view('templates/forcorporate');

    }

    public function kids(){
        session()->set('countryCode', 'IN');
        return view('templates/kids');

    }
    public function stepforcolleges(){
        session()->set('countryCode', 'IN');
        return redirect()->to("forcorporate", 301);

    }

    public function stepworks(){
        session()->set('countryCode', 'IN');
        return redirect()->to("forinstitution", 301);

    }

    public function forinstitution(){
        session()->set('countryCode', 'IN');
        return view('templates/forinstitution');

    }





//Product Brief Page 
     public function examprepcrash(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/exam-prep-crash',$data);

    }
     public function examprepunlimited(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/exam-prep-unlimited',$data);

    }
   
     public function ieltsprepCrash(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];
        return view('templates/ielts-prep-crash',$data);

    }
 
    public function workingProfessionalCrash(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/working-professional-crash',$data);

    }
    public function workingProfessionalUnlimited(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $productData = $model->fetchProductData();
        $countryCode = "IN";
        $data = [
            'CourseDetails' => $courseDetails,
            'countryCode' => $countryCode,
            'productData' => $productData,
        ];

        return view('templates/working-professional-unlimited',$data);
    }


    public function gcUnlimited(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $data['CourseDetails'] = $courseDetails;
        #print_r($data);
        $countryCode = "IN";
        $data['countryCode'] = $countryCode;
        return view('templates/gc-unlimited',$data);

    }
    public function gcOnline(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $data['CourseDetails'] = $courseDetails;
        #print_r($data);
        $countryCode = "IN";
        $data['countryCode'] = $countryCode;
        return view('templates/gc-online',$data);

    }
    public function gcCrash(){
        $model = model(Product::class);
        $courseDetails = $model->getCourseDetails();
        $data['CourseDetails'] = $courseDetails;
        #print_r($data);
        $countryCode = "IN";
        $data['countryCode'] = $countryCode;
        return view('templates/gc-crash',$data);

    }



   
}

?>
