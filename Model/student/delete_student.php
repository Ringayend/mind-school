<?php
function delete_student($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM student WHERE s_last_name= $1 and s_first_name= $2',array($lastname,$firstname));  

	}