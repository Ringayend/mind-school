<?php
function delete_student_activity($student_id,$activity_id,$date)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM done WHERE student_id= $1 and activity_id= $2 and activity_date= $3',array($student_id,$activity_id,$date));  

	}