<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class HealthServices extends admin
{
    public function index()
    {
        $db = new database();
        $paraclinics = $db->select('select * from health_ser order by child_of')->fetchAll();
        $paraclinics=$this->get_array_of_childs($paraclinics);
        $html='';
        foreach ($paraclinics as $paraclinic){
            $html.=$this->generate_table_of_childs($paraclinic);
        }
        $this->showpage("health-service/index.php", "مدیریت خدمات درمانی", $html);
    }

    public function create()
    {
        $db = new database();
        $all_paraclinics = $db->select('select * from health_ser order by child_of ')->fetchAll();
        $paraclinics=$this->get_array_of_childs($all_paraclinics);
        $html='';
        foreach ($paraclinics as $paraclinic){
            $html.=$this->generate_dropdown_options($paraclinic);
        }
        $this->showpage("health-service/create.php", "افزودن خدمات درمانی",$html);

    }

    public function store($request)
    {
      if (empty($request['poster']['name'])) {
            $this->redirect("admin/health-service?action=0");
        } else {
            $request['poster'] = $this->saveimage($request['poster'], 'setting');
        }
        if (empty($request['page_poster']['name'])) {
            $this->redirect("admin/health-service?action=0");
        } else {
            $request['page_poster'] = $this->saveimage($request['page_poster'], 'setting');
        }
        $db=new database();
        $para=$db->select('select * from health_ser where url=?',[$request['url']])->fetch();
        if ($para!=false){
            $i=1;
            while ($para!=false){
                $request['url']=$request['url'].' '.$i;
                $para=$db->select('select * from health_ser where url=?',[$request['url']])->fetch();
            }
        }
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db->create('health_ser',$fields,$values);
        $this->redirect("admin/health-service?action=true");
    }

    public function delete($id)
    {
        $db = new database();
        $db->delete("health_ser", "id", $id);
        $db->delete("health_ser", "child_of", $id);
        $this->redirect("admin/health-service?action=true");
    }

    public function edit($id)
    {
        $db = new database();
        $paraclinic = $db->select('select p.*,a.title as father_name,a.id as father_id from health_ser as p left join health_ser as a on 
    p.child_of=a.id  where  p.id=?', [$id])->fetch();
        $all_paraclinics = $db->select('select * from paraclinic order by child_of ')->fetchAll();
        $paraclinics=$this->get_array_of_childs($all_paraclinics);
        $html='';
        foreach ($paraclinics as $para){
            $html.=$this->generate_dropdown_options($para,$paraclinic['child_of']);
        }
        $this->showpage("health-service/edit.php", "ویرایش خدمات درمانی",['all'=>$html,'para'=> $paraclinic] );
    }

    public function update($request, $id)
    {
        if (empty($request['poster']['name'])) {
            unset(  $request['poster']);
        } else {
            $request['poster'] = $this->saveimage($request['page_poster'], 'setting');
        }
        if (empty($request['page_poster']['name'])) {
            unset(  $request['page_poster']);
        } else {
            $request['page_poster'] = $this->saveimage($request['page_poster'], 'setting');
        }
        $fields = [];
        $values = [];
        $db=new database();
        $para=$db->select('select * from health_ser where url=?',[$request['url']])->fetch();
        if ($para!=false){
            $i=1;
            while ($para!=false){
                $request['url']=$request['url'].' '.$i;
                $para=$db->select('select * from health_ser where url=?',[$request['url']])->fetch();
            }
        }
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->update('health_ser',$fields,$values,'id',$id);
        $this->redirect("admin/health-service?action=true");

    }
}