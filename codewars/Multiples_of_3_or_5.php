<?php
    $number = 33;
    solution($number);
    function solution($number){
        if($number > 0){
            $sum = 0;
            for($i = 3; $i < $number; $i+=1){
                if($i % 5 === 0){
                    $sum += $i;
                }elseif($i % 3 === 0){
                    $sum += $i;
                }
            }
        }
        echo $sum;
        echo "<br>end";
    }