<?php 
function add_activity_owner($school_id,$activity_id)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO owner (school_id,activity_id) VALUES ($1, $2)", array($school_id, $dactivity_id));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}
