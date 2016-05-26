<?php

class Calc {
    private $hello;
    private $goodbye;

    function __construct($hello) {
        $this->hello = $hello;
    }

    function Calc() {
        for ($i = 0; $i <= $this->hello; $i++) {
            $this->goodbye = $this->goodbye + $i+1;
        }
    }

//    function getGoodBye() {
//        return $this->goodbye . PHP_EOL;
//    }

    function getReject() {
        return $this->goodbye . PHP_EOL;
    }
}