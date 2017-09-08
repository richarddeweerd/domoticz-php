<?php
switch (apcu_fetch('sSet_Keukendimmer')) {
    case "Manual":
        //Manual
        break;
    case "Auto":
        //Auto
        if (apcu_fetch('OverrideKeukenDimmer') != "True"){
            if (apcu_fetch('sKeuken_PIR')=='On'){
                //Dimmer high
                setdimmer("Keuken",apcu_fetch('vvKeuken_Dimmer_High'));
            } elseif (apcu_fetch('sKeuken_PIR')=='Off'){
                //Dimmer low
                setdimmer("Keuken",apcu_fetch('vvKeuken_Dimmer_Low'));
            }        
        }
        break;
}
?>