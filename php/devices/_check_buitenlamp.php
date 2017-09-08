<?php
lg(apcu_fetch('sSet_Buitenlamp'));
switch (apcu_fetch('sSet_Buitenlamp')) {
    case "Manual":
        //Manual
        break;
    case "Timer-On":
        //Timer on
        if (apcu_fetch('sTimer_Buitenlamp')=='On'){
            sw("Buitenlamp","On");
        } elseif (apcu_fetch('sTimer_Buitenlamp')=='Off'){
            sw("Buitenlamp","Off");
        }        
        break;
    case "Timer-Sensor":
        //Timer Sensor
        if ((apcu_fetch('sBuiten_PIR')=='On')&&(apcu_fetch('sTimer_Buitenlamp')=='On')){
            sw("Buitenlamp","On");
        } else {
            sw("Buitenlamp","Off");
        }        
        break;
    case "Sensor":
        //Sensor
        if (apcu_fetch('sBuiten_PIR')=='On'){
            sw("Buitenlamp","On");
        } elseif (apcu_fetch('sBuiten_PIR')=='Off'){
            sw("Buitenlamp","Off");
        }        
        break;
}
?>