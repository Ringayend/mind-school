<?php
try
{

$user = 'zibbwcylqtdurb';
$password = 'qV94Q6nb0wfXfnd3xA3tdjp709';
$dbname = 'd17t7qeh3nuo6q';
$host = 'ec2-54-228-219-2.eu-west-1.compute.amazonaws.com';
$port = 5432;
	
$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>
