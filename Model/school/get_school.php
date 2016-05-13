<?php 
function get_school($name,$continent)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * from school WHERE school_name= $1 and school_continent= $2;',array($name,$continent));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}
