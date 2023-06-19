<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class  Message extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select * from contact order by created_at')->fetchAll();
        $this->showpage("messages/index.php", "manage messages", $users);
    }
    public function delete($id)
    {
        $db = new database();
        $db->delete("contact", "id", $id);
        $this->redirect('admin/messages?action=true');
    }


    public function set_answer($request,$id){
        $db = new database();
        $content = $request['content'];
        $file = $request['file']['name'];
        if (!empty($content)) {
            $randstring = rand(1000000000, 999999999999);
            $user=$db->select('SELECT * FROM contact WHERE id=?',[$id])->fetch();
            $link_id = $randstring;
            $link = url('/contact/message/'. $link_id) ;
            if (!empty($file)) {
           $request['file']= $this->saveimage($request['file'],'messages');
            }else {
            unset($request['file']);
            }
           } else {
            $request['file'] = 'nofile';
        }
        $db->update('contact',['replay','file','link'],[$content,$request['file'],$randstring],'id',$id,'reaplay_date');
        send_message($user['phone'], "کاربر گرامی پیام شما پاسخ داده شد \n مشاهده پاسخ در لینک: " . $link);
        $this->redirect('admin/messages?action=true');
    }

    public function view($id){
        $db = new database();
        $user_info=$db->select('select * from contact where id=?',[$id])->fetch();
        $this->showpage("messages/edit.php", "Edit faq",  $user_info);

    }
}