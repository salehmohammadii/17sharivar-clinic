<?php


namespace auth;


use database\database;

class login extends auth
{
    public function index()
    {
        $this->showpage('login.php','ورود به حساب کاربری',$this->get_general_info());
   }


    public function loginCheck($request){
        if (empty($request['username']) or empty($request['password'])){
            flash("login_error","پسورد یا ایمیل نمیتواند خالی باشد");
            $this->redirectback();
        }else{
            $db=new database();
            $user=$db->select("select * from users where phone=? and password=?",[$request['username'],$request['password']])->fetch();

            if ($user){
                $_SESSION['user'] = $user['id'];
                $_SESSION['name'] = $user['full_name'];
                if($user['roll']==1){
                    $_SESSION['roll']=1;
                    $this->redirect("admin");
                }else{
                    $this->redirect("");
                }
            }else{
                flash("login_error","اطلاعات وارد شده صحیح نیست");
                $this->redirectback();
            }
        }
    }
    public function log_out(){
        if (isset($_SESSION['user'])){
            unset($_SESSION['user']);
            unset($_SESSION['name']);
            session_destroy();
        }
        $this->redirect("home");
    }

}