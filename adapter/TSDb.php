<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 16.09.18
 * Time: 04:01
 */



 class TSDb extends mysqli{

    private $host_name = 'db748804796.db.1and1.com';
    private $database = 'db748804796';
    private $user_name = 'dbo748804796';
    private $password = 'Tml321Bmg()=';

    public $connect;

     /**
      * @return mysqli
      */
     public function __construct(){

         $this->connect = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database);

         return $this;
    }

     /**
      * @param string $query
      * @return bool|mysqli_result
      */

     public function ts_query($query){
         $result = $this->connect->query($query);

         return $result;
     }

}