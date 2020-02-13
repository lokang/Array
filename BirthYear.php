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
            echo "<select name=\"birthYear\" id=\"birthYear-select\">";
            for($i=0; $i < 8; $i++){
                $y = $year++;
                echo "<option"."Choose year"."</option>";
                echo "<option>".$y."<br>"."</option>";
            }
            echo "</select>";
        }
    }
}
$y = new BirthYear();
echo $y->year();
?>