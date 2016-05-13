<?php 
function get_activity($title)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * FROM activity WHERE title= $1',array($title));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}