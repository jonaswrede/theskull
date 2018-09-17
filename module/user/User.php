<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 16.09.18
 * Time: 14:34
 */
include "../../adapter/tsdb.php";


/**
 * Class User
 */
class User
{
    protected $uid;
    protected $sid;
    protected $gip;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @return null
     */
    public function getGip()
    {
        return $this->gip;
    }

    /**
     * @param null $gip
     */
    public function setGip($gip)
    {
        $this->gip = $gip;
    }

    /**
     * User constructor.
     * @param $uname
     * @param $pw
     */
    public function __construct($uname, $pw)
    {
        $this->uname = $uname;
        $this->upw = $pw;

        return $this;
    }


    public function check_credentials($name){

        $db = new \TSDBase\tsdb();

    }


}