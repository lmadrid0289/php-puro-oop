<?php

class Database{

    public static function connect(){
        $db = new myqli('localhost','root','');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}