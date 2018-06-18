<?php

/*迭代器模式*/
namespace Imooc;

/**
 * 这个例子用来保存所有的user 对象
 */
class IteratorDemo implements \Iterator
{
    protected $ids;
    protected $index;

    public function __construct()
    {
        $mysql = new  Database\PdoAdapter();
        $db = $mysql->connect("root", "111111dd", "localhost", "test");
        $this->ids = $db->query("select id from `user`")->fetchAll(\PDO::FETCH_ASSOC);
    }

    /* 方法 */
    public function current()
    {
        $userid = $this->ids[$this->index]['id'];
        // var_dump($userid);exit;
        return Factory::createUser($userid);
    }

    public function key()
    {
        return $this->index;
    }

    public function next()
    {
        $this->index++;
    }

    public function rewind()
    {
        $this->index = 0;
    }

    public function valid()
    {
        return count($this->ids) > $this->index;
    }

}