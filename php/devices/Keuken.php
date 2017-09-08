<?php
if($status!="Off"){
    if ($status=="On"){
      sw("AppLamp_Keuken","On");
    } else {
      $s = explode(" ",$status);
      if ($s[1] == "Level:") {
        setdimmer("AppLamp_Keuken",$s[2]);
      }  
    }
    

}else{
  sw("AppLamp_Keuken","Off");
}
