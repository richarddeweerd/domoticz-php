<?php
switch (apcu_fetch('sSet_Gordijnen')) {
    case "Manual":
        //Manual
        break;
    case "Auto Close":
        //Auto
        if (apcu_fetch('sTimer_Gordijnen')=="On"){
            //Sluiten
            sw("Gordijnen","On");            
        } elseif (apcu_fetch('sTimer_Gordijnen')=="Off"){
            //Openen            
        }
        break;
    case "Full Auto":
        if (apcu_fetch('sTimer_Gordijnen')=="On"){
            //Sluiten
            sw("Gordijnen","On");            
        } elseif (apcu_fetch('sTimer_Gordijnen')=="Off"){
            //Openen
            sw("Gordijnen","Off");            
        }
        break;
}
?>