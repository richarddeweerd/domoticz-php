<?php
if($status=="On"){
    //Thuiskomen

} elseif ($status=="Off"){
    //Vertrokken
    if (apcu_fetch('s'."Armed_Away")== "Closed"){
        //Alarm vergeten
        notify("Alarm", "Alarm Vergeten!")
    }
}
?>