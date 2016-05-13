<?php 
function add_student_teacher($student_id,$teacher_id,$grade)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO done (student_id, teacher_id, grade) VALUES ($1, $2,$3)", array($student_id,$activity_id,$grade));  
		$result = pg_fetch_all($req);
 		
 		return $result;
	}
