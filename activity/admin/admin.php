<?php


namespace admin;


use auth\auth;

class admin
{

    public function __construct()
    {
        $auth=new auth();
        if( $auth->isAdmin()==false){
            $this->redirect("auth/login");
        }

    }

    protected function redirect($url){
        header('location: '.trim(current_domain,"/ ")."/".$url);
        exit();
    }
    protected function saveimage($image,$imagepath){
        $extention=explode("/",$image['type'])[1];
        $rand=random_int(0,99);
        $imagename=date("Y-m-d-H-i-s-u").$rand.".".$extention;
        $imagetemp=$image['tmp_name'];
        $imagepath="public/".$imagepath."/";
        if (is_uploaded_file($imagetemp)){
            if (move_uploaded_file($imagetemp,$imagepath.$imagename)){
                return $imagepath.$imagename;
            }
        }
return false;
    }
    protected function deleteimage($path){
        if (file_exists($path)) {
            $path = trim($path, "/");
            unlink($path);
        }
return true;
    }
    protected function showpage($src,$title,$parametrs=null){
        require_once base_path."/templates/admin/layouts/header.php";
        require_once base_path."/templates/admin/".$src;
        require_once base_path."/templates/admin/layouts/footer.php";

    }

}