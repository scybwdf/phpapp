<?php

class Db{

    static private $_instance;
    static private $_connectSource;
    private $dbconfig=array(
        'host'=>'127.0.0.1',
        'user'=>'root',
        'password'=>'dakehui9118',
        'databases'=>'mysql',

    );
    private function __construct()
    {

    }

    static public function getInstance(){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function connect(){

        if(!self::$_connectSource){
        self::$_connectSource=mysqli_connect($this->dbconfig['host'],$this->dbconfig['user'],$this->dbconfig['password'],$this->dbconfig['databases']);

        if(!self::$_connectSource){
            die('mysql connect fail:'.mysqli_connect_error());
        }

        mysqli_query('set names UTF8',self::$_connectSource);

        }
        return self::$_connectSource;
    }
}

$connect=Db::getInstance()->connect();
var_dump($connect);