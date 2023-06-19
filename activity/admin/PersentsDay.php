<?php


namespace admin;


use database\database;

class PersentsDay extends admin
{
    public function index()
    {
        $db = new database();
        $users = $db->select('select presentday.*,users.*,skills.title as sk_title from presentday left join users on presentday.user_id = users.id 
left join skills on users.skill=skills.id')->fetchAll();
        $this->showpage("presentdays/index.php", "doctors", $users);
    }

    public function store($user_id)
    {
        $db=new database();
        $db->create('presentday',['user_id'],[$user_id]);
    }


    public function update_weekday($request){
        $id = $request['user_id'];
        $day = $request['weekDay'];
        $db=new database();

        $user = $db->select("SELECT $day FROM presentday WHERE user_id=?",[$id])->fetch();

        if (count($user) >= 1) {
            if ($user[$day] == 1) {
                $x = 0;
            } else {
                $x = 1;
            }
            $db->update('presentday',[$day],[$x],'user_id',$id);
                echo "ok";
            }
        }

    public function update_weekday_ontime($request){
        $ontime = $request['ontime'];
        $user_ids = $request['user_ids'];
        $day_names = $request['day_names']."_clock";
        $db=new database();
        $db->update('presentday',[$day_names],[$ontime],'user_id',$user_ids);
        echo "all";
    }
    
}