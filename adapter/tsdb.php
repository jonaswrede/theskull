<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 16.09.18
 * Time: 04:01
 */


namespace TSDBase;

use mysqli;

 class tsdb extends mysqli
{

    private $host_name = 'db748804796.db.1and1.com';
    private $database = 'db748804796';
    private $user_name = 'dbo748804796';
    private $password = 'Tml321Bmg()=';

    public $connect;

     /**
      * @return mysqli
      */
     public function __construct(){

         $connect = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database);

         $this->connect=$connect;

         return $this->connect;
    }

     public function select_user($query){
         $result = $this->connect->query($query);

         var_dump( $result);

         return $result;
     }

}