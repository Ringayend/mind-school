<?php
  class Activity {
   
    public $id;
    public $title;
    public $description;
    public $tools;
    public $intelligence;

    public function __construct($id, $title, $description, $tools,$intelligence) {
      $this->id = $id;
      $this->title = $title;
      $this->description = $description;
      $this->tools = $tools;
      $this->intelligence = $intelligence;
    }


    public static function create($title, $description, $tools, $intelligence){
      $db = Db::getInstance();
      $req = pg_query_params($db,'INSERT INTO activity (title, activity_description, activity_tools, activity_intelligence) VALUES ($1,$2,$3,$4)',array($title, $description, $tools, $intelligence));
      }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = pg_query($db,'SELECT * FROM activity');
      foreach(pg_fetch_all($req) as $activity) {
        $list[] = new Activity($activity['activity_id'], $activity['title'], $activity['activity_description'], $activity['activity_tools'],$activity['activity_intelligence']);
      }

      return $list;

    }

    public static function find($id) {
      $db = Db::getInstance();
      $list = [];
      $req = pg_query_params($db,'SELECT * FROM activity WHERE activity_id = $1',array($id));
      foreach(pg_fetch_all($req) as $activity) {
          $list[] = new Activity($activity['activity_id'], $activity['title'], $activity['activity_description'], $activity['activity_tools'],$activity['activity_intelligence']);
        }
        return $list;
      }

    public static function update_description($id, $description){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE activity SET activity_description = $2 WHERE activity_id = $1',array($id, $description));
      }

    public static function update_tools($id, $tools){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE activity SET activity_tools = $2 WHERE activity_id = $1',array($id, $tools));
      }

    public static function update_intelligence($id, $intelligence){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE activity SET activity_intelligence = $2 WHERE activity_id = $1',array($id, $intelligence));
      }

    public static function delete($id, $title){
      $db = Db::getInstance();
      $req = pg_query_params($db,'DELETE FROM activity WHERE activity_id = $1 and title = $2',array($id, $title));
      }

    public static function add($id, $lastname , $firstname ){
      $db = Db::getInstance();
      $req2 = pg_query_params($db, 'SELECT student_id FROM student WHERE s_last_name = $1 and s_first_name = $2',array($lastname,$firstname));
      $idStud = pg_fetch_result($req2, 0, 0);
      $req = pg_query_params($db,'INSERT INTO done (student_id, activity_id, activity_date) VALUES ($1,$2, now())',array($idStud, $id));
      } 

    
  }
?>

