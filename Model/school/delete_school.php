<?php
function delete_school($name,$continent)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM school WHERE school_name= $1 and school_continent= $2;',array($name,$continent));  

 	}


