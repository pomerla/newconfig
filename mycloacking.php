<?php

$file=file("config/cloaking/ip.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {	
 $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
 $ip = $_SERVER["REMOTE_ADDR"];	
}

echo $ip.'<br/>';





$key = array_search($ip, $file); // $key = 2;
if($key){
    echo 'black site';
}else{
    echo 'white site';
}

// wrightlog($ip);






function wrightlog($ip){
    $red_log=file("config/cloaking/log.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $find_in_log = array_search($ip, $red_log);
    
    if($find_in_log){
        echo 'Есть такой в логах';
    }else{
        echo 'Пишу в лог';
        $s = fopen("config/cloaking/log.txt","a+");
        fwrite($s,$ip."\r\n");
        fclose($s);
    } 
     
}


?>
