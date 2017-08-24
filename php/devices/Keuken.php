<?php
if($status!="Off"){
    if ($status=="On"){
      sw("AppLamp_Keuken","On");
    } else {
      $s = explode(" ",$status);
      if ($s[2] == "Level:") {
        setdimmer("AppLamp_Keuken",$s[3]);
      }  
    }
    

}else{
  sw("AppLamp_Keuken","Off");
}
