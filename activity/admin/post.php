<?php


namespace admin;

use app\notification;
use database\database;
class post extends admin
{
    public function index(){

        $db=new database();
        $posts=$db->select('SELECT articles.*,a.title as art_type FROM articles left join article_type a on articles.type = a.id')->fetchAll();
        $this->showpage("posts/index.php","Posts",['posts'=>$posts]);
    }
    public function create(){
        $db=new database();
        $parametrs=$db->select("select * from article_type order by id desc");
        $this->showpage("posts/create.php","Create Posts",$parametrs);

    }
    public function store($request){
        $title = $request['title'];
        $content = $request['content'];
        $content2 = $request['content2'];
        $type = $request['type'];
        $poster = $request['poster'];
        $pdf = $request['pdf'];
        $tags = $request['tags'];
        $time = $request['time'];
        $writer = $request['writer'];
        $surce = $request['surce'];
        $url = $request['url']!=''?$request['url']:$request['title'];
        $seo_title = $request['seo_title'];
        $seo_desc = $request['seo_desc'];
        $scripts = $request['scripts'];
        $link = "not-link";

           $img=$this->saveimage($poster,'post-image');
           if (!empty($pdf)) {
           $pdf=$this->saveimage($pdf,'post-image');
           }else {
           $pdf='';
           }
           $db=new database();
           $db->create('articles',['title','content','type','time','adder','poster','tags','seen','adder_id','writer','surce','link','content2','pdf','reat','reat_num','all_reat','url','seo_title','seo_desc','scripts'],
           [$title,$content,$type,$time,$_SESSION['name'],$img,$tags,0,1,$writer,$surce,$link,$content2,$pdf,5,1,5,$url,$seo_title,$seo_desc,$scripts]);
            $this->redirect("admin/post?action=true");
//        }
//        $this->redirect("admin/post?action=0");
    }

    public function delete($id){
        $db=new database();
        $image=$db->select("select poster from articles where id=?",[$id])->fetch();
        $this->deleteimage($image['poster']);
        $db->delete("articles","id",$id);
        $this->redirect("admin/post?action=true");
    }
    public function edit($id){
        $db=new database();
        $categories=$db->select('select * from article_type');
        $posts=$db->select('select * from articles where id=?',[$id])->fetch();
        $parametrs=array_merge(["category"=>$categories],["post"=>$posts]);
        $this->showpage("posts/edit.php","Edit Post",$parametrs);
    }
    public function update($request,$id){

        $fields=[];
        $values=[];
        if (!empty($request['poster']["name"])) {
            $path=$this->saveimage($request['poster'],'post-image');
            $request['poster']=$path;
        }else{
            unset($request['poster']);
        }
        foreach ($request as $key=>$value){
            if ($value!='') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->update('articles',$fields,$values,'id',$id);
        $this->redirect("admin/post?action=true");
    }


}