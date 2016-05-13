<?php
function delete_student_teacher($student_id,$teacher_id,$date)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM supervise WHERE student_id= $1 and teacher_id= $2 and activity_date= $3',array($student_id,$teacher_id,$date));  

	}