<?php

namespace Imooc\BeverageDecoration;

class MilkBeverageDecoration extends \Imooc\BeverageDecoration
{
    public function __construct(\Imooc\IBeverage $beverage)
    {
        parent::__construct($beverage);
    }

    public function cost()
    {
        return parent::cost() + 3;
    }

    public function description()
    {
        return parent::description() . " <span style='color:red'>with milk</span>";
    }
}