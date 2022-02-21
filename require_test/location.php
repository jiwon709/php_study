<?php

class Testclass
{
    public $name;
    public $dong;

    //생성자
    function __construct($name, $dong) {
        $this -> name = $name;
        $this -> dong = $dong;
    }

    public function location() {
        print_r("{$this -> name}는 {$this -> dong}에 살고 있습니다.");
    }

}