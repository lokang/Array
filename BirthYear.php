<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 13/2/20
 * Time: 7:39 PM
 */
class BirthYear
{
    public function year(){
        $years = array(date("Y"));
        foreach($years as $year){
            for($i=0; $i < 8; $i++){
                $y = $year++;
                echo $y."<br>";
            }
        }
    }
}

$y = new BirthYear();
echo $y->year();
?>
