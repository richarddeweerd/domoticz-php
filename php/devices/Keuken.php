<?php
if($status!="Off"){
    setdimmer("AppLamp_Keuken",$status);

}else{
  sw("AppLamp_Keuken","Off");
}
