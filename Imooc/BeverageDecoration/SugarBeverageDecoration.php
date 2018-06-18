<?php

namespace Imooc\BeverageDecoration;

class SugarBeverageDecoration extends \Imooc\BeverageDecoration
{
    public function __construct(\Imooc\IBeverage $beverage)
    {
        parent::__construct($beverage);
    }

    public function cost()
    {
        return parent::cost() + 2;
    }

    public function description()
    {
        return parent::description() . "  <span style='color:green'>with sugar<span>";
    }
}