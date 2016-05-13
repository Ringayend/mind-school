<?php
function delete_teacher($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM teacher WHERE t_last_name= $1 and t_first_name= $2',array($lastname,$firstname));  

	}