<?php
if($status=="Open"){
  sethue("Bed_RGBW",300,20);
  notify("Alarm","Armed Away");
} else if ($status=="Closed"){
  sethue("Bed_RGBW",128,40,false);
}
