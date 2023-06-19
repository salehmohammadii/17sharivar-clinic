<?php
session_start();


//config
define("base_path",__DIR__);
define("current_domain",current_domain()."");
define("desplay_error",true);
define("db_host",'localhost');
define("db_name","saleh_clinik-new");
define("db_username","saleh_clinic");
define("db_password","k4CHYXm~YUB(");








//admin
require_once "database/database.php";
require_once "activity/admin/admin.php";
require_once "activity/admin/Category.php";
require_once "activity/admin/post.php";
require_once "activity/admin/slider.php";
require_once "activity/admin/comment.php";
require_once "activity/admin/user.php";
require_once "activity/admin/web_settings.php";
require_once "activity/admin/dashboard.php";
require_once "activity/admin/Doctor.php";
require_once "activity/admin/Skills.php";
require_once "activity/admin/PersentsDay.php";
require_once "activity/admin/LabResult.php";
require_once "activity/admin/FAQ.php";
require_once "activity/admin/UserFAQs.php";
require_once "activity/admin/FAQTypes.php";
require_once "activity/admin/Terms.php";
require_once "activity/admin/Message.php";
require_once "activity/admin/Rate.php";
require_once "activity/admin/Admins.php";
require_once "activity/admin/Paraclinic.php";
require_once "activity/admin/HealthServices.php";
require_once "activity/admin/Tag.php";


//auth
require_once "activity/auth/auth.php";
require_once "activity/auth/register.php";
require_once "activity/auth/login.php";
require_once "activity/auth/forgot_password.php";

//app
require_once "activity/app/home.php";
require_once "activity/app/MainPage.php";
require_once "activity/app/ContactUs.php";
require_once "activity/app/Calender.php";
require_once "activity/app/LabResult.php";
require_once "activity/app/Blog.php";
require_once "activity/app/Comment.php";
require_once "activity/app/FAQ.php";
require_once "activity/app/Rate.php";




//jdate
require_once "lib/Parsidev/Jalali/jDateTime.php";
require_once "lib/Parsidev/Jalali/jDate.php";



//helpers
function toShamsi($date,$format='datetime'){
return \Parsidev\Jalali\jDate::forge($date)->format($format);
}


function protocol(): string
{

    return  'https://';
}


function current_domain(): string
{
  return protocol().$_SERVER['HTTP_HOST'];
}


function assets($src){

    return trim(current_domain,"/ ")."/".trim($src,"/");
}
function url($src){
    return trim(current_domain,"/ ")."/".trim($src,"/");
}
function curent_url(){
    return current_domain().$_SERVER['REQUEST_URI'];
}
function request_method(){
    return $_SERVER['REQUEST_METHOD'];
}
function display_error($display_error){
    if ($display_error){
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);
    }else{
        ini_set('display_errors',0);
        ini_set('display_startup_errors',0);
        error_reporting(0);
    }
}


global $flashMessage;
if(isset($_SESSION['flash_message'])){
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}


function flash($name, $value = null)
{
    if($value === null){
        global $flashMessage;
        $message = isset($flashMessage[$name]) ? $flashMessage[$name] : '';
        return $message;
    }
    else{
        $_SESSION['flash_message'][$name] = $value;
    }

}
function uri($reservedUrl,$class,$method,$requestMethod="GET"){

    $curentUrl=explode("?",curent_url())[0];
    $curentUrl=str_replace(current_domain,"",$curentUrl);
    $curentUrl=trim($curentUrl,"/");
    $curentUrl=explode("/",$curentUrl);
    $curentUrl=array_filter($curentUrl);


    $reservedUrl=trim($reservedUrl,"/");
    $reservedUrl=explode("/",$reservedUrl);
    $reservedUrl=array_filter($reservedUrl);
    if (sizeof($curentUrl)!= sizeof($reservedUrl) or request_method()!=$requestMethod){
        return false;
    }
    $parameters=[];
    for ($i=0;$i<sizeof($reservedUrl);$i++){
if($reservedUrl[$i][0]=="{" and $reservedUrl[$i][strlen($reservedUrl[$i])-1]=="}"){
    array_push($parameters,str_replace(["{","}"],"",$curentUrl[$i]));
}elseif ($reservedUrl[$i]!==$curentUrl[$i]){
    return false;
}
    }
if ($requestMethod==="POST"){
    $request=isset($_FILES)?array_merge($_FILES,$_POST):$_POST;
    $parameters=array_merge([$request],$parameters);
}
$object=new $class;
call_user_func_array(array($object,$method),$parameters);

exit();
}
function send_message($phone,$text){
    ini_set("soap.wsdl_cache_enabled", "0");
    try {
        $client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding' => 'UTF-8'));
        $parameters['username'] = "09121248305";
        $parameters['password'] = "q*Ya9UcI";
        $parameters['from'] = "50004001220266";
        $parameters['to'] = array("$phone");
        $parameters['text'] = $text;
        $parameters['isflash'] = true;
        $parameters['udh'] = "";
        $parameters['recId'] = array(0);
        $parameters['status'] = 0x0;
        $client->GetCredit(array("username" => "09121248305", "password" => "q*Ya9UcI"))->GetCreditResult;
        $client->SendSMS($parameters)->SendSmsResult;
    } catch (SoapFault $ex) {
        echo $ex->faultstring;
    }
}


function dd($var){
    echo "<pre>";
    var_dump($var);
    exit();
}
$db=new \database\database();

//admin

//dashboard
uri("admin","admin\dashboard","index");

//category
uri("admin/category","admin\category","index");
uri("admin/category/create","admin\category","create");
uri("admin/category/store","admin\category","store","POST");
uri("admin/category/edit/{id}","admin\category","edit");
uri("admin/category/update/{id}","admin\category","update","POST");
uri("admin/category/delete/{id}","admin\category","delete");


//category
uri("admin/category","admin\category","index");
uri("admin/category/create","admin\category","create",'POST');
uri("admin/category/store","admin\category","store","POST");
uri("admin/category/edit/{id}","admin\category","edit");
uri("admin/category/update/{id}","admin\category","update","POST");
uri("admin/category/delete/{id}","admin\category","delete");


//category
uri("admin/calendar","admin\PersentsDay","index");
uri("admin/calendar/update-weekday","admin\PersentsDay","update_weekday",'POST');
uri("admin/calendar/update_weekday_ontime","admin\PersentsDay","update_weekday_ontime","POST");



//post
uri("admin/post","admin\post","index");
uri("admin/post/create","admin\post","create");
uri("admin/post/store","admin\post","store","POST");
uri("admin/post/edit/{id}","admin\post","edit");
uri("admin/post/delete/{id}","admin\post","delete");
uri("admin/post/update/{id}","admin\post","update","POST");

//tag
uri("admin/tag","admin\Tag","index");
uri("admin/tag/delete/{id}","admin\Tag","delete");


//messages
uri("admin/messages","admin\Message","index");
uri("admin/messages/view/{id}","admin\Message","view");
uri("admin/messages/set-answer/{id}","admin\Message","set_answer","POST");
uri("admin/meesages/delete/{id}","admin\Message","delete");





//Doctors
uri("admin/doctor","admin\Doctor","index");
uri("admin/doctor/create","admin\Doctor","create");
uri("admin/doctor/store","admin\Doctor","store","POST");
uri("admin/doctor/edit/{id}","admin\Doctor","edit");
uri("admin/doctor/update/{id}","admin\Doctor","update","POST");
uri("admin/doctor/delete/{id}","admin\Doctor","delete");


//lab-results
uri("admin/lab-result","admin\LabResult","index");
uri("admin/lab-result/create","admin\LabResult","create");
uri("admin/lab-result/store","admin\LabResult","store","POST");
uri("admin/lab-result/edit/{id}","admin\LabResult","edit");
uri("admin/lab-result/update/{id}","admin\LabResult","update","POST");
uri("admin/lab-result/delete/{id}","admin\LabResult","delete");


//Doctors
uri("admin/skills","admin\Skills","index");
uri("admin/skills/create","admin\Skills","create");
uri("admin/skills/store","admin\Skills","store","POST");
uri("admin/skills/edit/{id}","admin\Skills","edit");
uri("admin/skills/update/{id}","admin\Skills","update","POST");
uri("admin/skills/delete/{id}","admin\Skills","delete");


//FAQ
uri("admin/faq","admin\FAQ","index");
uri("admin/faq/create","admin\FAQ","create");
uri("admin/faq/store","admin\FAQ","store","POST");
uri("admin/faq/edit/{id}","admin\FAQ","edit");
uri("admin/faq/update/{id}","admin\FAQ","update","POST");
uri("admin/faq/delete/{id}","admin\FAQ","delete");

//Terms
uri("admin/terms","admin\Terms","index");
uri("admin/terms/create","admin\Terms","create");
uri("admin/terms/store","admin\Terms","store","POST");
uri("admin/terms/edit/{id}","admin\Terms","edit");
uri("admin/terms/update/{id}","admin\Terms","update","POST");
uri("admin/terms/delete/{id}","admin\Terms","delete");

//paraclinick
uri("admin/paraclinic","admin\Paraclinic","index");
uri("admin/paraclinic/create","admin\Paraclinic","create");
uri("admin/paraclinic/store","admin\Paraclinic","store","POST");
uri("admin/paraclinic/edit/{id}","admin\Paraclinic","edit");
uri("admin/paraclinic/update/{id}","admin\Paraclinic","update","POST");
uri("admin/paraclinic/delete/{id}","admin\Paraclinic","delete");


//healt_services
uri("admin/health-service","admin\HealthServices","index");
uri("admin/health-service/create","admin\HealthServices","create");
uri("admin/health-service/store","admin\HealthServices","store","POST");
uri("admin/health-service/edit/{id}","admin\HealthServices","edit");
uri("admin/health-service/update/{id}","admin\HealthServices","update","POST");
uri("admin/health-service/delete/{id}","admin\HealthServices","delete");

//FAQ
uri("admin/faq-type","admin\FAQTypes","index");
uri("admin/faq-type/create","admin\FAQTypes","create");
uri("admin/faq-type/store","admin\FAQTypes","store","POST");
uri("admin/faq-type/edit/{id}","admin\FAQTypes","edit");
uri("admin/faq-type/update/{id}","admin\FAQTypes","update","POST");
uri("admin/faq-type/delete/{id}","admin\FAQTypes","delete");



//user faq
uri("admin/user-faq","admin\UserFAQs","index");
uri("admin/user-faq/store-answer/{id}","admin\UserFAQs","store_answer","POST");
uri("admin/user-faq/set-answer/{id}","admin\UserFAQs","set_answer");
uri("admin/user-faq/delete/{id}","admin\UserFAQs","delete");


//user faq
uri("admin/rate","admin\Rate","index");
uri("admin/rate/delete/{id}","admin\Rate","delete");

//banner
uri("admin/new-slider","admin\slider","index");
uri("admin/slider/store","admin\slider","store","POST");
uri("admin/slider-manager","admin\slider","edit");
uri("admin/slider/update","admin\slider","update","POST");
uri("admin/slider/store-slider","admin\slider","store_slider","POST");
uri("admin/slider/update-slide","admin\slider","update_slider","POST");
uri("admin/slider/delete/{id}","admin\slider","delete");

//comment
uri("admin/comments","admin\comment","index");
uri("admin/comments/delete/{id}","admin\comment","delete");
uri("admin/comments/reply/{id}","admin\comment","reply");
uri("admin/comments/store/{id}","admin\comment","store","POST");

//user
uri("admin/user","admin\user","index");
uri("admin/user/edit/{id}","admin\user","edit");
uri("admin/user/update/{id}","admin\user","update","POST");
uri("admin/user/delete/{id}","admin\user","delete");
uri("admin/user/set-user/{id}","admin\user","set_user");
uri("admin/user/set-admin/{id}","admin\user","set_admin");

//user
uri("admin/admins","admin\Admins","index");
uri("admin/admins/edit/{id}","admin\Admins","edit");
uri("admin/admins/create","admin\Admins","create");
uri("admin/admins/update/{id}","admin\Admins","update","POST");
uri("admin/admins/store","admin\Admins","store","POST");
uri("admin/admins/delete/{id}","admin\Admins","delete");
uri("admin/admins/activate/{id}","admin\Admins","activate");
uri("admin/admins/deactivate/{id}","admin\Admins","deactivate");


//web_settings
uri("admin/web_settings","admin\web_settings","index");
uri("admin/web_settings/create","admin\web_settings","create");
uri("admin/web_settings/store","admin\web_settings","store","POST");
uri("admin/web_settings/edit","admin\web_settings","edit");
uri("admin/web_settings/update","admin\web_settings","update","POST");
uri("admin/web_settings/delete/{id}","admin\web_settings","delete");
uri("admin/about","admin\web_settings","about_us");
uri("admin/drugstore","admin\web_settings","drugstore");
uri("admin/charity","admin\web_settings","charity");
uri("admin/main-page","admin\web_settings","main_page");
uri("admin/web-settings/page_store/{id}","admin\web_settings","store_page","POST");


//auth
//register
uri("auth/register",'auth\register',"index");
uri("auth/register/store",'auth\register',"store","POST");

//activation
uri("activation/{verify_token}",'auth\register',"activation");

//login
uri("auth/login",'auth\login',"index");
uri("auth/login/login-check",'auth\login',"loginCheck","POST");
uri("auth/logout",'auth\login',"log_out");


//forgot password
uri("auth/forgot-password",'auth\forgot_password',"index");
uri("auth/forgot-password/send-email",'auth\forgot_password',"send_email","POST");
uri("forgot-password/{verify_token}",'auth\forgot_password',"reset_password");
uri("auth/reset-password/store/{verify_token}",'auth\forgot_password',"store","POST");
uri("auth/log-out",'auth\login',"log_out");

//app
uri("home",'app\MainPage',"index");
uri("/",'app\MainPage',"index");
uri("search",'app\MainPage',"doctor_search","POST");
uri("about-us",'app\MainPage',"about_us");
uri("paraclinic/{title}",'app\MainPage',"paraclinic");
uri("health-service/{title}",'app\MainPage',"health_service");
uri("terms",'app\MainPage',"terms");
uri("privacy-policy",'app\MainPage',"privacy");

//contact-us
uri("contact-us",'app\ContactUs',"index");
uri("contact-us/store",'app\ContactUs',"store",'POST');
uri("/contact/message/{id}",'app\ContactUs',"view");

//calender
uri("calender",'app\Calender',"index");
uri("calender/all",'app\Calender',"all");

//lab result
uri("lab-result",'app\LabResult',"login");
uri("lab-result/view-result",'app\LabResult',"view_result",'POST');

//blog
uri("blog",'app\Blog',"index");
uri("blog/{title}",'app\Blog',"view_post");
uri("category/{category}",'app\Blog',"category");
uri("tag/{tag}",'app\Blog',"tag");


//comment
uri("comment/reply",'app\Comment',"reply",'POST');
uri("comment/store",'app\Comment',"store",'POST');

//faq
uri("faq",'app\FAQ',"index");
uri("faq/store",'app\FAQ',"store",'POST');
uri("faq/message/{id}",'app\FAQ',"view");

//rate-us
uri("rate",'app\Rate',"index");
uri("rate/store",'app\Rate',"store",'POST');




  require_once base_path . "/templates/404/404.php";