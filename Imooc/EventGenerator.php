<?php

namespace Imooc;

abstract class EventGenerator
{
    private $observers;
    /*注册观察者*/
    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /* 通知观察者 */
    public function notify()
    {
        foreach ( $this->observers as $observer) {
            $observer->operate();
        }
    }
}