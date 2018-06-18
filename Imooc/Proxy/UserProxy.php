<?php

namespace Imooc\Proxy;

class UserProxy
{
    public function getRecode($id)
    {
        $db = \Imooc\Factory::getDatabase("slave");
        return $db->query("select * from `user` where `id` = '${id}'");
    }

    public function setRecode($id,$recode_arr)
    {
        $db = \Imooc\Factory::getDatabase("master");
        $sql = "insert into `user` ( " . implode(',', array_keys($recode_arr))." ) values ( \"". implode('","', $recode_arr) ."\" )";
        return $sql;
    }
}