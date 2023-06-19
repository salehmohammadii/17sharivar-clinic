<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class HealthServices extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select p.*,a.title as father_name,a.id as father_id from health_ser as p left join health_ser as a on 
    p.child_of=a.id')->fetchAll();
        $this->showpage("health-service/index.php", "manage health service", $users);
    }

    public function create()
    {
        $db = new database();
        $all_paraclinics = $db->select('select * from health_ser')->fetchAll();
        $this->showpage("health-service/create.php", "add paraclinic",$all_paraclinics);

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
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value != '') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
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
        $all_paraclinics = $db->select('select * from health_ser where id!=?',[$paraclinic['id']])->fetchAll();
        $this->showpage("health-service/edit.php", "Edit health service",['all'=>$all_paraclinics,'para'=> $paraclinic] );
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