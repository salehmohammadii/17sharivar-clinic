<?php

namespace admin;
use database\database;
class LabResult extends admin  {
    public function index(){
        $db=new database();
        $parametrs=$db->select('select * from lab_results order by id desc ')->fetchAll();
        $this->showpage("lab_results/index.php","lab result",$parametrs,);
    }
    public function create(){
        $this->showpage("lab_results/create.php","add result");
    }
    public function store($request){
        $code = $request['code'];
        $phone = $request['phone'];
        $name = $request['name'];
        $doctor = $request['doctor'];
        $file1 = $request['file']['name'];
        if (!empty($code) && !empty($phone) && !empty($file1) && !empty($doctor) && !empty($name)) {
                $path=$this->saveimage($request['file'],'lab-results');
            $db=new database();
            $db->create("lab_results",['name','link','phone','code','status','doctor'],[$name,$path,$phone,$code,"اپلود شده",$doctor]);
            $this->redirect("admin/lab-result?action=true");
            }
    }

    public function edit($id){
        $db=new database();
        $parametrs=$db->select('select * from lab_results where id=?',[$id])->fetch();
        $this->showpage("lab_results/edit.php","Edit lab result",$parametrs);
    }
    public function update($request,$id){
        if ($request['file']['tmp_name']!=''){
            $request['link']=$this->saveimage($request['file'],'lab-results');
        }
            unset($request['file']);
        $fields=[];
        $values=[];
        foreach ($request as $key=>$value){
            $fields[]=$key;
            $values[]=$value;
        }
        $db=new database();
        $db->update("lab_results",$fields,$values,"id",$id);
        $this->redirect("admin/lab-result?action=true");
    }
    public function delete($id){
        $db=new database();
       $result= $db->select('select * from lab_results where id=?',[$id])->fetch();
        $this->deleteimage($result['link']);
        $db->delete("lab_results","id",$id);
        $this->redirect("admin/lab-result?action=true");
    }
}