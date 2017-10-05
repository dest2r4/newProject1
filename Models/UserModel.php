<?php

class UserModel
{
    private $id;
    private $login;
    private $pass;
    private $role;

    const TABLE='users';
    const ROLE_USER=0;
    const ROLE_ADMIN=1;

    public function __construct($login,$pass,$role='')
    {
        $this->login=$login;
        $this->pass=$pass;
        $this->role=$role;
    }


    public function saveUser(){
        if($this->id)return $this->updateUser();
        return $this->createUser();
    }
    public function createUser(){
        $this->role=(int) (in_array($this->role,[self::ROLE_USER,self::ROLE_ADMIN]))?$this->role:self::ROLE_USER;
        $db=DB::getInstance();
        $query="INSERT INTO `".self::TABLE."`
        SET `login`='".$this->login."',
        `pass`='".$this->pass."',
        `role`='".$this->role."'";
        $db->query($query);
        (new Logger(Logger::LOG_LEVEL_REQUEST,$query));
        var_dump($db->insert_id);
        if(!$id=$db->insert_id)return false;
        $this->id=$id;
        return true;

    }
    public function updateUser(){}
    public function deleteUser(){}

    public function userExists($login,$type="bool"){
        $db=DB::getInstance();
        $res=$db->query("SELECT * FROM `".self::TABLE."` WHERE `login`='".$login."' LIMIT 1");
        if($type=="bool")return (bool) $db->affected_rows;
        return $res->fetch_assoc();
    }
    public function loginUser(){
        $user=$this->userExists($this->login,"array");
        $this->role=(int)$user['role'];
        $this->id=$user['id'];
        if(!$user || $user['pass']!==$this->pass)return false;

        return true;
    }
    public function registerUser(){
        if($this->userExists($this->login))die("sorry user exists");
        return $this->saveUser();
    }

    public function getLogin(){
        return $this->login;
    }















}