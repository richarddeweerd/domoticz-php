<?php

if($status!="Off"){
    if ($status=="On"){
      apcu_store('KeukenOnTime',time);
      @include '/opt/jarvis/php/devices/_check_keukendimmer.php';
    } else {
      //lg($status);
      $s = explode(" ",$status);
      if ($s[1] == "Level:") {
        if (((int)$s[2] >= (int)apcu_fetch('vvKeuken_Dimmer_High')-1)&&((int)$s[2] <= (int)apcu_fetch('vvKeuken_Dimmer_High')+1)){

        } elseif (((int)$s[2] >= (int)apcu_fetch('vvKeuken_Dimmer_Low')-1) && ((int)$s[2] <= (int)apcu_fetch('vvKeuken_Dimmer_Low')+1)){

        } else {
          //Override
          if (apcu_fetch('KeukenOnTime'>= (time - 1) )){
            apcu_store('OverrideKeukenDimmer',"True");
          }          
        }
      }  
    }
    

}else{
  apcu_store('OverrideKeukenDimmer',"False");
}
