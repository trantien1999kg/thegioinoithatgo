<?php 
    session_start();
    $char_set       =   "ABCDEFGHJKLMNPQRSTUVWXYZ2345689";
    $char_length    =   rand(5,7);
    $code = "";
    for ($i = 0; $i < $char_length ; $i++) {
        $char = substr( $char_set, rand(0, strlen($char_set) - 1), 1);
        $code .= $char;
    }
    $_SESSION['captcha_code'] = $code;
    
    echo $code;
?>