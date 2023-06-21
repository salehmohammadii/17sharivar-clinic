<?php

namespace admin;
use database\database;
class web_settings extends admin  {

    public function index(){
        $db=new database();
        $parametrs=$db->select('select * from settings where id=1')->fetch();
        $parametrs=json_decode($parametrs['value'],true);
        $this->showpage("web-settings/index.php","Web settings",$parametrs,);
    }
    public function update($request){
        $db=new database();
        $settings=$db->select('select * from settings where id=1')->fetch();
        $settings=json_decode($settings['value'],true);
        if (isset($request['about_poster'])){
            $request['about_poster'] = $this->saveimage($request['about_poster'], "setting");
            $settings['about_poster']=$request['about_poster'];
        }
        if (isset($request['logo'])){
            if ($request['header']['tmp_name']!='') {
                $request['header'] = $this->saveimage($request['header'], "setting");
                $settings['header']=$request['header'];
            }
            if ($request['footer']['tmp_name']!='') {
                $request['footer'] = $this->saveimage($request['footer'], "setting");
                $settings['footer']=$request['footer'];
            }
            if ($request['favicon']['tmp_name']!='') {
                $request['favicon'] = $this->saveimage($request['favicon'], "setting");
                $settings['favicon']=$request['favicon'];
            }
        }else {
            foreach ($request as $key => $value) {
                $settings[$key] = $value;
            }
        }
        $settings=json_encode($settings);
        $db->update("settings",['value'],[$settings],'id',1);
        $this->redirect("admin\web_settings?action=true");
    }

    public function main_page()
    {
        $db=new database();
        $parametrs=$db->select('select * from settings where id=1')->fetch();
        $parametrs=json_decode($parametrs,true);
        $this->showpage("web-settings/main-page.php","صفحه اصلی",$parametrs);
    }

    public function about_us()
    {
        $db=new database();
       $about= $db->select('select * from settings where page_key=?',['about'])->fetch();
        $about=$about['value']??'';
       $this->showpage("web-settings/pages.php","درباره ما",['content'=>$about,'page_title'=>'about']);
    }


    public function drugstore()
    {
        $db=new database();
        $about= $db->select('select * from settings where page_key=?',['drugstore'])->fetch();
        $about=$about['value']??'';
        $this->showpage("web-settings/pages.php","داروخانه",['content'=>$about,'page_title'=>'drugstore']);
    }

    public function charity()
    {
        $db=new database();
        $about= $db->select('select * from settings where page_key=?',['charity'])->fetch();
        $about=json_decode($about['value'],true);
        $content=$about['content']??'';
        $url=$about['url']??'';
        $this->showpage("web-settings/charity.php","خیریه",['content'=>$content,'page_title'=>'charity','url'=>$url]);
    }
    public function store_page($request,$page)
    {
        $db=new database();
        $page_info=$db->select("select * from settings where page_key=?",[$page])->fetch();
        if ($page_info != false) {
            $db->update('settings',['value'],[$request['content']],'page_key',$page);
        }else{
            $db->create('settings',['value','page_key'],[$request['content'],$page]);
        }
        $this->redirect('admin/'.$page.'?action=true');
    }

    public function store_charity($request)
    {
        $db=new database();
        $request=json_encode($request);
        $db->update('settings',['value'],[$request],'page_key','charity');
        $this->redirect('admin/charity'.'?action=true');

    }
}