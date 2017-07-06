<?php
apcu_store("test");
print(apcu_fetch('cron604800'));

// Show all information, defaults to INFO_ALL
phpinfo();

?>
