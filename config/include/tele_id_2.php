<? //	Отправка в телеграм

$data_tel = array(
    'id'      		  => $tele_id, // ID в телеграмме 
	'mess' 			  => $_REQUEST['mess'], // Tекст уведомления
    'product'     	  => $product,        // Название продукта
	'price' 		  => "{$price_new} {$valuta}",
	'date'			  => "{$date} {$time}",
    'bayer_name'      => $name,             // покупатель (Ф.И.О)
    'phone'           => $phone,           // телефон
    'email'           => $email_client,           // электронка
	'longtime'		  => $time_in_land,
	'visit'			  => $visit,
	'lastvisit'		  => $visit_text_tele,
	'comment'         => $mess_tele,    // комментарий
	'crm'        	  => $crm_tele,    // Ответ СРМ
	'device' 		  => $device,
	'os'			  => $os,
	'browser' 		  => $browser,
	'proxy'			  => $proxy,
    'site'            => $server,  // сайт отправляющий запрос
    'ip'              => $remote_addr,  // IP адрес покупателя
	'host'			  => $remote_host,
	'ref' 			  => $_SESSION['referer'], // реферер
    'city'			  => $city, // Город заказчика
	'screen'		  => $screen,
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source 
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium 
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term   
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content    
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'] // utm_campaign
);
	

 
// echo("data_tele:");print_r($data_tel);echo("<br>");
// запрос
$curl_tel = curl_init();
    curl_setopt($curl_tel, CURLOPT_URL, 'https://telebot.moroz.rv.ua/ramstudio/postapi.php');
    curl_setopt($curl_tel, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl_tel, CURLOPT_POSTFIELDS, http_build_query($data_tel));
    $out = curl_exec($curl_tel);
    curl_close($curl_tel);
	//echo("tele:");print_r($out_tel);echo("<br>");
    //var_dump($out);
    