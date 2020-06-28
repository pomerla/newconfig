<?
$products_list = array(
    1 => array( 
            'product_id' => $product_id_crm,    //код товара (из каталога CRM)
            'price'      => $price_new, //цена товара 1
            'count'      => '1'                      //количество товара 1
    ),  
    
);
$products_crm = urlencode(serialize($products_list));
 if ($country_crm=="auto")  $country_crm = $country_code;


$sender = urlencode(serialize($_SERVER));
// параметры запроса


$Data = array(
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => $country_crm,                         // Географическое направление заказа
    'office'          => $office_crm,                          // Офис (id в CRM)
    'product'         => $product,                    // массив с товарами в заказе
	'quantity'   	  => '1',
    'currency'   	  => $valuta,
	'price'   	  	  => $price_new,
    'bayer_name'      => $name,            // покупатель (Ф.И.О)
    'phone'           => $phone,           // телефон
    'email'           => '',           // электронка
    'comment'         => $comment,    // комментарий
    'delivery'        => $delivery_crm,        // способ доставки (id в CRM)
    'delivery_adress' => $city, // адрес доставки
    'payment'         => $payment_crm,                           // вариант оплаты (id в CRM)
    'sender'          => $server,                      
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign
    'additional_1'    => $_POST['formname'],                           // Дополнительное поле 1
    'additional_2'    => "Визитов: {$visit}, Время на сайте: {$time_in_land}", // Дополнительное поле 2
    'additional_3'    => "{$device}: {$os}, {$browser}, {$screen}",                               // Дополнительное поле 3
    'additional_4'    => "Батарея: {$batery_proc}, зарядное: {$batery_zar}"  // Дополнительное поле 4                           // Дополнительное поле 2
);
 
// ************* Call API:
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://".$user_api_key."/api/ver1/addNewOrder");
curl_setopt($ch, CURLOPT_POST, true);// set post data to true
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $Data);   // post data

curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'X-Api-Key: '.$customer_api_key.''
));


$json = curl_exec($ch);
curl_close ($ch);

// returned json string will look like this: {"code":1,"data":"OK"}
// "code" may contain an error code and "data" may contain error string instead of "OK"
$obj = json_decode($json);

if ($obj->{'code'} == '1')
{
  $processed = TRUE;
  
}else{
  $ERROR_MESSAGE = $obj->{'error'};
}



if (!$processed && $ERROR_MESSAGE != '') {
    $server_response = $ERROR_MESSAGE;
}else{ $server_response = $json;}
//echo("crm:");  echo("<br>");
//$out – ответ сервера в формате JSON
//$obj->{'message'};
 $m1=$obj->{'status_ru'}; 
 $m2=$obj->{'mess_ru'};
 $m3=$obj->{'order_id'};

$mess="<tr><td><b>Ответ СРМ:</b></td><td> {$m1},</td></tr><tr>\n<td><br>Сообщение CRM: {$m2}</td></tr>";
$crm_tele=	"<b>Ответ СРМ:</b> {$m1}, {$m2}, OrderID:{$m3}";
$_SESSION['orderid']=$data['order_id'];
