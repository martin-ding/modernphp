<?php

namespace Imooc;

class User
{
    public $id;
    public $name;
    public $age;
    public $regtime;
    public $rand_num;
    protected $db;

    public function __construct($id)
    {
        $usermysql="root";
        $passwd= "111111dd";
        $host = "localhost";
        $dbname = "test";
        $this->db = new Database\MysqlAdapter();
        $this->db->connect($usermysql, $passwd, $host, $dbname);
        $result = $this->db->query("select * from `user` where id = $id");
        $returnResult = []; //initialise empty array
        while($row = $result->fetch_assoc())
        {
            $returnResult[] = $row;
        }
        /* free result set */
        $result->free();
        $arr = $returnResult[0];
        
        $this->id = $arr["id"];
        $this->name = $arr["name"];
        $this->age = $arr["age"];
        $this->regtime = $arr["regtime"];
        $this->rand_num = $arr["rand_num"];
    }

    /*更新到数据库中*/
    public function __destruct()
    {
        $sql = "update `user` set `age` = '{$this->age}',`name` = '{$this->name}',`rand_num` = '{$this->rand_num}' where id = '{$this->id}'";
        $this->db->query($sql);
    }

}