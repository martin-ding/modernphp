<?php

namespace Imooc;

interface IProxy
{
    function getRecode($id);
    function changeRecode($id,$recode_arr);
}