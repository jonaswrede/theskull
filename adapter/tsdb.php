<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 16.09.18
 * Time: 04:01
 */

namespace Adapter;


 use mysqli;

 class tsdb
{

    private $host = "db748804796.db.1and1.com";
    private $db = "db748804796";
    private $user="dbo748804796";
    private $pw="Tml321Bmg()='";

     /**
      * @return mysqli
      */
     public function __construct(){

        $connect = new mysqli($this->host, $this->db, $this->user, $this->pw);

        return $connect;
    }

}