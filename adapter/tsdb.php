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

         if (mysqli_connect_errno()){
             die('<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysqli_connect_error().'</p>');
         }
         else {
             echo '<p>Verbindung zum MySQL Server erfolgreich aufgebaut.</p >';

             $this->connect=$connect;
         }


         return $this->connect;
    }

     /**
      * @param $query
      * @return bool|\mysqli_result
      */
     public function select_user($query){
         $result = $this->connect->query($query);

         var_dump( $result);
     }

}