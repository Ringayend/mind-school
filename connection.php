<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $user = 'ebtzzvspoiqgva';
        $password = 'Psq42QkH8pKn1lra4__5pc1sWE';
        $dbname = 'dbqmajil9iavg0';
        $host = 'ec2-54-228-219-2.eu-west-1.compute.amazonaws.com';
        $port = 5432;

        self::$instance = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
      }
      return self::$instance;
    }
  }
?>