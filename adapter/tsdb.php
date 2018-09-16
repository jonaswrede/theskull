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

    private $host = "db748804796.db.1and1.com";
    private $db = "db748804796";
    private $user="dbo748804796";
    private $pw="Tml321Bmg()='";

    public $connect;

     /**
      * @return mysqli
      */
     public function __construct(){
         $connect = new mysqli($this->host, $this->db, $this->user, $this->pw);
         /** @var mysqli $connect */

         $this->connect = $connect;
         return $this->connect;
    }

     /**
      * @param $query
      * @return bool|\mysqli_result
      */
     public function select_user($query){
         $result = $this->connect->query($query);

         return $result;
     }

}