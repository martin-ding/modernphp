<?php

namespace Imooc;

abstract class BeverageDecoration implements IBeverage
{
    protected $beverage;

    public function __construct(IBeverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function description()
    {
        return $this->beverage->description();
    }

    public function cost()
    {
        return $this->beverage->cost();
    }
}