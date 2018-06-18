<?php

namespace Imooc\Database;

use Imooc\IDatabaseAdapter;

class MysqlAdapter implements IDatabaseAdapter
{
    protected $link;
    public function connect($user, $passwd, $host, $dbname)
    {
        $this->link = mysqli_connect($host, $user, $passwd, $dbname);
        if ($this->link->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        return $this->link;
    }

    public function query($sql)
    {
        $result = mysqli_query($this->link, $sql);
        // if ($result = $this->link->query($sql)) {

        //     $returnResult = []; //initialise empty array
        //     while($row = $result->fetch_assoc())
        //     {
        //         $returnResult[] = $row;
        //     }
        //     /* free result set */
        //     $result->free();
        //     return $returnResult;
        // }

        return $result;
    }

    public function close()
    {
        mysqli_close($this->link);
    }
}
