<?php
/**
 * Created by PhpStorm.
 * User: jonas.wrede
 * Date: 16.09.18
 * Time: 14:34
 */
include "../../../adapter/TSDb.php";


/**
 * Class User
 */
class User
{
    protected $uid;
    protected $sid;
    protected $gip;
    protected $uname;

    /**
     * @return mixed
     */
    public function getUname()
    {
        return $this->uname;
    }
    private $upw;

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


    /**
     *
     */
    public function check_credentials()
    {

        $db = new TSDB();

        $result = $db->ts_query("SELECT lname,pass,id_group,id_user from login,user_to_group where lname= '" . $_POST['username'] . "' AND login.id = user_to_group.id_user");
        $db->close();


        if (mysqli_num_rows($result) == 1) {
            foreach ($result as $value) {

                $pas = $value["pass"];

                if (password_verify($_POST["pass"], $pas)) {
                    $this->gip = $value["id_group"];
                    $this->uname = $value["lname"];
                    $this->uid = $value["id_user"];

                    return true;
                }
            }
        }
        else {
            return false;
        }
    }
}