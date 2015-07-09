<?php
/**
 * Created by PhpStorm.
 * User: Hamzeen. H.
 * Date: 4/11/15 Time: 12:45 PM
 */

include ('Member.class.php');
include ('Database.class.php');
class ViewController {

    public $info;
    public $db;
    public $member;

    function __construct() {
        $this->db = new Database();
        $this->member = new Member();
        $this->info = "";
    }

    function login($email, $password) {

        if(empty($email)) {
            $this->info = "email is mandatory";
            return false;
        }

        else if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            $this->info = "please enter a valid email address";
            return false;
        }

        // input validation => check for password length
        else if(strlen($password)<3) {
            $this->info = "minimum password length is 3";
            return false;
        }


        // if everything is bright, insert the record and singup new User!
        $query_str = "SELECT * FROM member WHERE email = '$email' AND password = '$password'";
        $this->db->query($query_str);
        if((bool) $this->db->numRows()) {
            return true;
        }

        $query_str = "SELECT * FROM member WHERE email = '$email'";
        $this->db->query($query_str);
        if((bool) $this->db->numRows()) {
            $this->info = "password is incorrect";
            return false;
        }

        $this->info = "please provide a correct username & password";
        return false;
    }

    function exists($email) {
        $query_str="SELECT email FROM member WHERE email = '$email'";
        $this->db->query($query_str);
        return (bool) $this->db->numRows();
    }

    function getInfo() {
        return $this->info;
    }

}