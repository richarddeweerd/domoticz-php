<?php
       
if($status!="Off"){
    if ($status=="On"){
      @include '/opt/jarvis/php/devices/_check_keukendimmer.php';
    } else {
      $s = explode(" ",$status);
      if ($s[1] == "Level:") {
        if (($s[2] != apcu_fetch('vvKeuken_Dimmer_High'))&& ($s[2] != apcu_fetch('vvKeuken_Dimmer_Low')) ){
          //Override
          setdimmer("Set_Keukendimmer", 30);
        }
      }  
    }
    

}else{
  //sw("AppLamp_Keuken","Off");
  if (apcu_fetch('sSet_Keukendimmer')== "Override"){
    setdimmer("Set_Keukendimmer", 20);
  }
}
