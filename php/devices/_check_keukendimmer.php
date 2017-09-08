<?php
switch (apcu_fetch('sSet_Keukendimmer')) {
    case "Manual":
        //Manual
        break;
    case "Auto":
        //Auto
        if ( apcu_fetch('sKeuken')=="Off"){
            //Light is out check for wakeup
            if (((int)apcu_fetch('sKeuken_Lux') <=1)&&(apcu_fetch('sKeuken_PIR')=="On")){
                //Low light and PIR registers movement -> wakeup
                apcu_store('WakeupKeukenDimmer',"True");
                setdimmer("Keuken",apcu_fetch('vvKeuken_Dimmer_Low'));
            }
        } else {
            //Light is on
            if (apcu_fetch('WakeupKeukenDimmer')=="True"){
                //Wakeup is active
                if (apcu_fetch('sKeuken_PIR')=="Off"){
                    //End wakeup
                    apcu_store('WakeupKeukenDimmer',"True");
                    sw("Keuken","Off");
                }
            } else {
                //Normal operation
                if (apcu_fetch('OverrideKeukenDimmer') != "True"){
                    //No overide active check for PIR
                    if (apcu_fetch('sKeuken_PIR')=='On'){
                        //Dimmer high
                        setdimmer("Keuken",apcu_fetch('vvKeuken_Dimmer_High'));
                    } elseif (apcu_fetch('sKeuken_PIR')=='Off'){
                        //Dimmer low
                        setdimmer("Keuken",apcu_fetch('vvKeuken_Dimmer_Low'));
                    }        
                }        
            }
        }
        break;
}
?>