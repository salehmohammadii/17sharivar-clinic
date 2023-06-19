<?php


namespace admin;

use app\notification;
use database\database;
class Tag extends admin
{
    public function index(){

        $db=new database();
        $posts=$db->select('SELECT *  FROM articles ')->fetchAll();
        $this->showpage("tags/index.php","Tags",['posts'=>$posts]);
    }

    public function delete($id){
        $db=new database();
       $db->update('articles',['tags'],[null],'id',$id);
        $this->redirect("admin/tag?action=true");
    }



}