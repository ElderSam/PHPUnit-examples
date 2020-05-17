<?php

namespace CodeExperts\Aritmetico;

class Soma
{
    //attributes
    private $num1;
    private $num2;

    //getters
    public function getNum1(){
        return $this->num1;
    }

    public function getNum2(){
        return $this->num2;
    }

    //setters
    public function setNum1($num){
        $this->num1 = $num;
    }

    public function setNum2($num){
        $this->num2 = $num;
    }

    public function somar()
    {
        return $this->num1 + $this->num2;  
    }
}