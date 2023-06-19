<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class UserFAQs extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select * from faq_questions')->fetchAll();
        $this->showpage("user-faq/index.php", "manage FAQs", $users);
    }
    public function delete($id)
    {
        $db = new database();
        $db->delete("faq_questions", "id", $id);
        $this->redirect("admin/user-faq?action=true");
    }


    public function set_answer($id){
        $db = new database();
        $faq = $db->select('select * from faq_questions where id=?', [$id])->fetch();
        $this->showpage("user-faq/set-answer.php", "Edit faq",  $faq);
    }

    public function store_answer($request,$id)
    {
        $randstring = rand(1000000000, 999999999999);
        $db = new database();
        $user_info=$db->select('select * from faq_questions where id=?',[$id])->fetch();
        $db->update('faq_questions',['replay','link'],[$request['content'],$randstring],'id',$id);
        $link=url("faq/message/".$randstring);
        send_message($user_info['phone'],"کاربر گرامی سوال شما پاسخ داده شد \n مشاهده پاسخ در لینک: " . $link);
        $this->redirect('admin/user-faq?action=true');
    }
}