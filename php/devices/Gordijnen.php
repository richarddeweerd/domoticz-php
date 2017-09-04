<?php
lg($status);

if($status=="Open"){
  #open
  sw("Gordijnen_Openen",'On');
  sw("Gordijnen_Openen",'Off');

}elseif ($status=="Closed") {
  # Close
  sw("Gordijnen_Sluiten",'On');
  sw("Gordijnen_Sluiten",'Off');

} else{

}
