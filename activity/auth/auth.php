<?php
namespace auth;
use database\database;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class auth
{

    protected $db;

    public function __construct()
    {
        $this->db=new database();
    }


    public function get_general_info()
    {
        return ['paraclinics'=>$this->get_paraclinics(0),'settings'=>$this->get_site_settings(),'health_services'=>$this->get_health_services(0)];
    }

    public function get_health_services($parent)
    {
        return $this->db->select("select * from health_ser where child_of=0")->fetchAll();

    }

    protected function get_paraclinics($child_of)
    {
        return $this->db->select("select * from paraclinic where child_of=?",[$child_of])->fetchAll();
    }

    protected function get_site_settings(){
        $settings= $this->db->select("select value from settings where id=1")->fetch();
        $settings=json_decode($settings['value'],true);
        return $settings;
    }

    protected function redirect($url){
        header('location: '.trim(current_domain,"/ ")."/".$url);
        exit();
    }
    protected function redirectback(){
        header('location: '.$_SERVER['HTTP_REFERER']);
        exit();
    }

    protected function showpage($src,$title,$parametrs=null){
        require_once base_path."/templates/app/layouts/header.php";
        require_once base_path."/templates/auth/".$src;
        require_once base_path."/templates/app/layouts/footer.php";
    }
    public  function isAdmin(){
        if (isset($_SESSION['user'])){
            $db=new database();
            $user=$db->select("select * from users where id=?",[$_SESSION['user']])->fetch();
            if ($user['roll']!=1){
            return false;
            }else{
                return true;
            }
        }else{
            return false;
        }
    }
}