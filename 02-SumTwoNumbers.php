<?php
    function sum($firstNum, $secondNum){
        $sum = $firstNum + $secondNum;
        echo '$firstNumber + $secondNumber = '.$firstNum.' + '.$secondNum.' = '.number_format((float)$sum, 2, '.', '').'<br/>';
    }
    sum(2, 5);
    sum(1.567808, 0.356);
    sum(1234.5678, 333);
