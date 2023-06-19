<?php

namespace admin;
use database\database;
class Category extends admin  {

    public function index(){
        $db=new database();
        $parametrs=$db->select('select * from article_type order by id desc ')->fetchAll();
        $this->showpage("categories/index.php","Category",$parametrs,);
    }
    public function create(){
        $this->showpage("categories/create.php","Create Category");

    }
    public function store($request){
        $db=new database();
        $db->create("article_type",['title'],[$request['title']]);
        $this->redirect("admin/category?action=true");
    }
    public function edit($id){
        $db=new database();
        $parametrs=$db->select('select * from article_type where id=?',[$id])->fetch();
        $this->showpage("categories/edit.php","Edit Category",$parametrs);
    }
    public function update($request,$id){
        $db=new database();
        $db->update("article_type",["title"],[$request['title']],"id",$id);
        $this->redirect("admin/category?action=true");
    }
    public function delete($id){
        $db=new database();
        $db->delete("article_type","id",$id);
        $this->redirect("admin/category?action=true");
    }
}