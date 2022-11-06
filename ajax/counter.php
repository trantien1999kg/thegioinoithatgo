<?php

    require_once 'ajaxConfig.php';

    $cache = new FileCache($db);

    $statistic = new statitis($db,$cache);  

?>