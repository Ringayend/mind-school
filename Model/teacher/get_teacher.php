<?php 
function get_student($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * from teacher WHERE s_last_name= $1 and s_first_continent= $2',array($lastname,$firstname));  

	}