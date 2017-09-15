<?php

if($status!="Off"){
    if ($status=="On"){

      @include '/opt/jarvis/php/devices/_check_keukendimmer.php';
    } else {
      $s = explode(" ",$status);
      if ($s[1] == "Level:") {
        if (((int)$s[2] >= (int)apcu_fetch('vvKeuken_Dimmer_High')-1)&&((int)$s[2] <= (int)apcu_fetch('vvKeuken_Dimmer_High')+1)){

        } elseif (((int)$s[2] >= (int)apcu_fetch('vvKeuken_Dimmer_Low')-1) && ((int)$s[2] <= (int)apcu_fetch('vvKeuken_Dimmer_Low')+1)){

        } else {
          //Override
          apcu_store('OverrideKeukenDimmer',"True");
        }
      }  
    }
    

}else{
  apcu_store('OverrideKeukenDimmer',"False");
  apcu_store('WakeupKeukenDimmer',"False");
}
