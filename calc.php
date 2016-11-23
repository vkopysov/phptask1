<?php


//Ошибки
ini_set('display_errors',1);
error_reporting(E_ALL);

//Fatal: E_PARSE E_ERROR
//Non-Fatal E_WARNING, E_NOTICE E_DEPRECATED E_STRICT

 
    try{
        echo calculate('ex',2);
        echo '<br>';
        // echo calculate(1,0);
        echo '<br>';
        //echo calculate(10,5);
        echo '<br>';
    } catch (Exception $ex) {
           echo $ex->getMessage()." Код ошибки : ".$ex->getCode();
           
    }
    
    
    
function calculate($num1, $num2){
    
    if($num1="ex"){
         throw new MyException("Получена моя ошибка!");
    }
    
    if(!is_numeric($num1)){
        throw new Exception("Первый аргумент не число!");
    }
    if(!is_numeric($num2)){
        throw new Exception("Второй аргумент не число!");
    }
    if($num2 == 0){
        throw new Exception("Второй аргумент 0!");
    }
   return $num1/$num2;
}

class MyException extends Exception{
    protected $code = 88005553535;

}