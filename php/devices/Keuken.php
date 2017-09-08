<?php

lg($status); 
        
if($status!="Off"){
    if ($status=="On"){
    } else {
      $s = explode(" ",$status);
      if ($s[1] == "Level:") {
        //setdimmer("AppLamp_Keuken",$s[2]);
//        lg($s[2]); 
        
        //apcu_fetch('vvKeuken_Dimmer_High')
      }  
    }
    

}else{
  sw("AppLamp_Keuken","Off");
  if (apcu_fetch('sSet_Keukendimmer')== "Override"){
    setdimmer("Set_Keukendimmer", 20);
  }
}
