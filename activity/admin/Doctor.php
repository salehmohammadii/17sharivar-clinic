<?php


namespace admin;


use database\database;
use admin\PersentsDay;
class Doctor extends admin
{
    public function index()
    {

        $db = new database();
        $users = $db->select('select users.*,skills.title as sk_title from users left join skills on users.skill=skills.id where roll=2 order by id desc ')->fetchAll();
        $this->showpage("doctors/index.php", "doctors", $users);
    }

    public function create()
    {

        $db = new database();
        $parametrs = $db->select("select * from skills order by id desc");
        $this->showpage("doctors/create.php", "add doctor", $parametrs);

    }

    public function store($request)
    {

        if ($request['password'] == "") {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 8; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $request['password'] = $randomString;
        }
        if (empty($request['profile']['name'])) {
            $request['profile'] = "public/app/img/vector.png";
        } else {
            $request['profile'] = $this->saveimage($request['profile'], 'user-image');
        }
        $db = new database();
        $doctor = $db->select('select * from users where phone=?', [$request['phone']])->fetch();
        if ($doctor != false) {
            $this->redirect('admin/doctor?action=0');
            exit();
        }
        $default_fields=['roll','status','code','Appointment_Reservation'];
        $default_values=[2,1,0,1];
        $fields = [];
        $values = [];
        foreach ($request as $key => $value) {
            if ($value!='') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db->create('users',array_merge($default_fields, $fields),array_merge($default_values,$values));
        $id=$db->last_inserted_id();
        $persentDay=new PersentsDay();
        $persentDay->store($id);
        $text = "کاربر گرامی حساب شما ایجاد گردید  \n نام کاربری : " . $request['phone'] . "\n پسورد : " . $request['password'];
        send_message($request['phone'],$text);
        $this->redirect('admin/doctor');
    }

    public function delete($id){
        $db=new database();
        $image=$db->select("select profile from users where id=?",[$id])->fetch();
        $this->deleteimage($image['profile']);
        $db->delete("users","id",$id);
        $this->redirect("admin/doctor?action=true");
    }
    public function edit($id){
        $db=new database();
        $doctor=$db->select('select users.*,skills.title from users left join skills on users.skill=skills.id where users.id=? ',[$id])->fetch();
        $skills = $db->select("select * from skills order by id desc");
        $parametrs=["doctor"=>$doctor,'skills'=>$skills];
        $this->showpage("doctors/edit.php","Edit doctor",$parametrs);
    }
    public function update($request,$id){
        if (empty($request['profile']['name'])) {
            unset($request['profile']);
        } else {
            $request['profile'] = $this->saveimage($request['profile'], 'user-image');
        }
        foreach ($request as $key => $value) {
            if ($value!='') {
                $fields[] = $key;
                $values[] = $value;
            }
        }
        $db=new database();
        $db->update('users',$fields,$values,'id',$id);
        $this->redirect("admin/doctor?action=true");
    }
}