<?php
apcu_store('s'.$device,$status);
if ($status == "On"){
    if ((int)apcu_fetch('sKeuken_Lux') <= 1){
        //Low light and PIR registers movement -> wakeup
        //apcu_store('WakeupKeukenDimmer',"True");
        //sethue("AppLamp",(int)apcu_fetch('vvApplamp_Color'),(int)apcu_fetch('vvApplamp_Level'),"false");
    }
} elseif ($status == "Off"){
    //apcu_store('WakeupKeukenDimmer',"False");
    //sw("AppLamp","Off");
}
@include '/opt/jarvis/php/devices/_check_keukendimmer.php';
?>
