<?php


namespace admin;


use database\database;

class slider extends admin
{

    public function index(){

        $this->showpage("sliders/index.php","اسلایدر ها");
    }

    public function store($request){
        if (isset($request['new-slider'])) {
            $place = $request['place'];
            $slides = $request['slides'];
            $files = $request['files']['name'];
            if (!empty($files)) {
                $db=new database();
                $db->create('sliders',['status','place'],[1,$place]);
                if (!empty($place) && !empty($slides)) {
                    $totalFile = count($request['files']['name']);
                    for ($i = 0; $i < $totalFile; $i++) {
                        $image['name']=$request['files']['name'][$i];
                        $image['type']=$request['files']['type'][$i];
                        $image['tmp_name']=$request['files']['tmp_name'][$i];
                     $path=   $this->saveimage($image,'setting');
                        $db->create('slider_slides',['file','status','for_slider','title','link'],[$path,1,$place,'empty','empty']);
                    }
                    $this->redirect('admin/slider-manager?action=true');
                }
            }
        }
        $this->redirect("admin/banner");
    }

    public function edit(){
        $db=new database();
        $sliders=$db->select('select * from sliders')->fetchAll();
        $slides=$db->select('select * from slider_slides')->fetchAll();
        $this->showpage("sliders/edit.php","مدیریت اسلاید ها",['slides'=>$slides,'sliders'=>$sliders]);
    }
    public function update($request){
        $db=new database();
        if (isset($request['actions']) && isset($request['status'])) {
            $id = $request['actions'];
            $status = $request['status'];
            $x = 0;
            if ($status == 1) {
                $x = 0;
            } else {
                $x = 1;
            }
            $db->update('sliders',['status'],[$x],'id',$id);
           echo "ok";
        }
        if (isset($request['idVal'])) {
            $id = $request['idVal'];
          $db->delete('slider_slides','id',$id);
            echo "ok";
        }
        if (isset($request['disVal']) && isset($request['statusVal'])) {
            $id = $request['disVal'];
            $status = $request['statusVal'];
            $x = 0;
            if ($status == 1) {
                $x = 0;
            } else {
                $x = 1;
            }
            $check = "UPDATE slider_slides SET status=? WHERE id=? ";
            $db->update('slider_slides',['status'],[$x],'id',$id);
            echo "ok";
        }
    }
    public function store_slider($request){
        $id = $request['id'];
        $files = $_FILES['files'];
        $title = $request['title']??'empty';
        $link = $request['link']??'empty';
        if (!empty($files) && !empty($id)) {
            $path=$this->saveimage($files,'setting');
            $db=new database();
            $db->create('slider_slides',['file','status','for_slider','title','link'],[$path,1,$id,$title,$link]);
            $this->redirect("admin/slider-manager?action=true");
            }
        $this->redirect("admin/slider-manager?action=0");
    }


public function update_slider($request){
    $id = $request['id'];
    $db=new database();
    $fields=[];
    $values=[];
    if ($request['title']!=''){
        array_push($fields,'title');
        array_push($values,$request['title']);
    }
    if ($request['link']!=''){
        array_push($fields,'link');
        array_push($values,$request['link']);
    }
    if (!empty($request['file'])){
        $path=$this->saveimage($request['file'],'setting');
        array_push($fields,'file');
        array_push($values,$path);
        $db->update('slider_slides',$fields,$values,'id',$id);
        }
    $this->redirect('admin/slider-manager?action=true');
}


public function delete($id){
    $db=new database();
      $sliders =$db->select( "SELECT * FROM sliders WHERE id=?",[$id])->fetch();
    if (count($sliders) >= 1) {
        foreach ($sliders as $key=>$slider) {
            $for_slider=$sliders['place'];
            $db->delete('slider_slides', 'for_slider', $for_slider);
            $db->delete('sliders', 'id', $id);
        }
    }
        $this->redirect('admin/slider-manager?action=true');
}
}