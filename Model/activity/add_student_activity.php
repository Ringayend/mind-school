<?php 
function add_student_activity($student_id,$activity_id,$date)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO done (student_id,activity_id,activity_date) VALUES ($1, $2,$3)", array($student_id,$activity_id,$date));  

	}
