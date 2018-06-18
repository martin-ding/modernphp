<?php 

namespace Imooc\Database;

use Imooc\IDatabaseAdapter;

class PdoAdapter implements IDatabaseAdapter
{
    protected $link;

    public function connect($user, $passwd, $host, $dbname)
    {
        $this->link = new \Pdo("mysql:host=$host;dbname=$dbname", $user, $passwd);
        return  $this->link;
    }

    public function query($sql)
    {
       $result = $this->link->query($sql);
       return $result;
       // return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function close()
    {
        unset($this->link);
    }
}