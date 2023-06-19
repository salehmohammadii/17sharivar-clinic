<?php


namespace admin;


use database\database;

class dashboard extends admin
{
    public function index(){
        $db=new database();
       $users= $db->select('SELECT COUNT(id) as te,roll from users GROUP by roll order by roll')->fetchAll();
       $messages= $db->select('SELECT COUNT(id) as te from contact')->fetch();
        $new_doctors=$db->select('SELECT id,full_name,resume,phone,created_at,personalCode,skill FROM users where  users.created_at > DATE_SUB(NOW(), INTERVAL 1 DAY)  &&  roll=2')->fetchAll();
        $seen_days=$db->select('SELECT * FROM site_seen WHERE id=1')->fetch();
        $day=date("l");
        $perv_day=date("l",strtotime("-1 days"));
        $now=$seen_days[$day];
        $yesterday =$seen_days[$perv_day];
        $all_day=$seen_days['all_day'];
        $chart_days=array(
            $seen_days['Saturday'],
            $seen_days['Sunday'],
            $seen_days['Monday'],
            $seen_days['Tuesday'],
            $seen_days['Wednesday'],
            $seen_days['Thursday'],
            $seen_days['Friday']
        );
        $parametrs=[
            "admins"=>$users[0]['te']??0,
            "doctors"=>$users[1]['te']??0,
            "users"=>$users[2]['te']??0,
            "messages"=>$messages['te'],
            'new_docters'=>$new_doctors,
            'seen_now'=>$now,
            'seen_yesterday'=>$yesterday,
            'seen_all_days'=>$all_day,
            'seens'=>$chart_days
            ];
        $this->showpage("dashboard/index.php","پنل ادمین",$parametrs);
    }
}