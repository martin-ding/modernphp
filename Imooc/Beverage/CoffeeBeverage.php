<?php

namespace Imooc\Beverage;

class CoffeeBeverage implements \Imooc\IBeverage
{
    public function description()
    {
        return "This is a cup of Coffee";
    }

    public function cost()
    {
        return 10;
    }
}