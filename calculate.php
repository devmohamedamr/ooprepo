<?php
require "calculateadv.php";


class calculate extends calcadv{

    public $num1;
    public $num2;
    public $op;

    function __construct($n1,$n2,$o){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->op = $o;
        switch($this->op){
            case "+":
              echo  $this->add();
            break;    
            case "-":
                echo    $this->sub();
            break;   
            case "/":
                echo   $this->div();
            break;   
            case "*":
                echo   $this->mult();
            break;   
            case "%":
                echo   $this->mod();
            break; 
        }

    } 

    // +
    function add(){
       return $this->num1 + $this->num2;
    }
    // -
    function sub(){
        return $this->num1 - $this->num2;
    } 
    // /
    function div(){
        return $this->num1 / $this->num2;
    }
    // *
    function mult(){
        return $this->num1 * $this->num2;
    }
}