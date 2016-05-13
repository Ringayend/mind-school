<?php 
function set_activity($title, $description, $tools, $intelligence)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO activity (title,activity_description, activity_tools, activity_intelligence) VALUES ($1, $2, $3, $4)", array($title, $description, $tools, $intelligence));  

	}

function get_activity($title)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * FROM activity WHERE title= $1',array($title));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}
function update_activity($id, $title, $description, $tools, $intelligence)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE activity SET(title,activity_description, activity_tools, activity_intelligence) = ($2,$3,$4,$5)) WHERE activity_id =$1 ', array($id, $title, $description, $tools, $intelligence));  

	}
function delete_activity($title)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM activity WHERE title= $1',array($title));  

	}
function add_activity_owner($school_id,$activity_id)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO owner (school_id,activity_id) VALUES ($1, $2)", array($school_id, $dactivity_id));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}
function add_student_activity($student_id,$activity_id,$date)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO done (student_id,activity_id,activity_date) VALUES ($1, $2,$3)", array($student_id,$activity_id,$date));  

	}
function delete_activity_owner($school_id,$activity_id)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM owner WHERE school_id= $1 and activity_id= $2',array($school_id,$activity_id));  

	}

function delete_student_activity($student_id,$activity_id,$date)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM done WHERE student_id= $1 and activity_id= $2 and activity_date= $3',array($student_id,$activity_id,$date));  

	}