<?php 
class Lands{
	
	public function currency($country)
	{
		switch ($country) {
		case 'UA': 	$currency='UAH';	break;
		case 'RU': 	$currency='RUB';	break;
		case 'BY': 	$currency='BYN';	break;
		case 'KZ': 	$currency='KZT';	break;
		
		default: { $currency='RUB';	}
		}
		return $currency;
	}
	
	public function og($price, $title, $desc, $img, $country )
	{
		
		$server=$_SESSION['serv']; $size_pic=getimagesize($server.$img);
		?>
	<meta name="title" content="<?php echo  $title ?>">	
	<meta property="og:title" content="<?php echo  $title ?>" />
	<meta property="og:description" content="<?php echo  $desc ?>" />
	
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo  $server ?>" />
	<meta property="og:image" content="<?php echo  $server ?>/<?php echo  $img ?>" />
	
	<!-- Для товара  -->
	<meta property="og:price:amount" content="<?php echo  $price ?>">
	<meta property="og:price:currency" content="<?php echo  Lands::currency($country) ?>">
	<meta name="twitter:url" content="<?php echo  $server ?>" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo  $title ?>">
	<meta name="twitter:description" content="<?php echo  $desc ?>">
	<meta name="twitter:image" content="<?php echo  $server ?>/<?php echo  $img ?>" />
	<meta name="twitter:image:width" content="<?php echo  $size_pic['0']?>">
	<meta name="twitter:image:height" content="<?php echo  $size_pic['1']?>">
	
	<meta itemprop="name" content="<?php echo  $title ?>"/>
	<meta itemprop="description" content="<?php echo  $desc ?>"/>
	<meta itemprop="url" content="<?php echo  $server ?>"/>
	<meta itemprop="image" content="<?php echo  $server ?><?php echo  $img ?>"/>
	
	<?php 
	} 
	
	public function head($head_index64)
	{
		if (file_exists("config/data/value.php")) include("config/data/value.php");
		if ($og_tag=='1') lands::og($price_new, $og_title, $og_desc, $og_pic, $country_script );
		?><style>.video-container {margin: -1px auto 0;width: 480px;height: 270px;background-color: #000;overflow: hidden;position: relative;}</style>
		<!-- Head Index -->
		<?php echo(base64_decode($head_index64)); ?>
		<!-- /Head Index -->
		<?php
	}
	
	public function body($body_index64)
	{
		if (file_exists("config/data/value.php")) include("config/data/value.php");
		if ($script_pokup==1) { ?>
		<script>
			var jQ = false;function initJQ(){if(typeof(jQuery)=='undefined'){if(!jQ){jQ = true;document.write('<scr'+'ipt type="text/javascript"src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></scr'+'ipt>');}setTimeout('initJQ()',50);}else{(function($){$(function(){	console.log("this is jq"); });})(jQuery);}}initJQ(); </script><?php 
		echo('<div class="insite hidden">Сейчас на сайте: <span id="insite"></span> | Покупок сегодня: <span id="pokup"></span></div>'); ?>
		<script>$(document).ready(function(){$('<link rel="stylesheet" href="config/css/insite.css">').appendTo("head");$('.insite').removeClass("hidden")}),null==localStorage.pokup2&&(localStorage.pokup2="<?php echo  $pokup2; ?>"),null==localStorage.pokup1&&(localStorage.pokup1="<?php echo  $pokup1; ?>"),$("#pokup").fadeIn(200).text(localStorage.pokup2),$("#insite").fadeIn(200).text(localStorage.pokup1);var timerId=setInterval(function(){$("#pokup").fadeOut(200);var e=$("#pokup").text(),t=Number(e)+1;$("#pokup").fadeIn(200).text(t),localStorage.pokup2=t},<?php echo  $pokup2n; ?>000);timerId=setInterval(function(){$("#insite").fadeOut(200);var e=$("#insite").text(),t=Number(e)+1;$("#insite").fadeIn(200).text(t),localStorage.pokup1=t},<?php echo  $pokup1n; ?>000);</script>
		<!-- Body Index -->
		<?php  } echo(base64_decode($body_index64)); ?>
		<!-- /Body Index -->
		<?php
	}
	
	public function random_name($ipol)
	{
		$pol=array("m","w","n","w","m");
		$name['w'] = array("Татьяна", "Светлана", "Елена", "Алина", "Екатерина", "Дарья", "Анжела", "Кристина", "Мирослава","Валерия","Маргарита","Евгения","Александра","Виктория","Анастасия","Мария","Ольга","Карина","Ксения","Наталья","Марина","Светлана","Вера");
		$surname['w'] = array("Смирновa","Абрамовa","Авдеевa","Блиновa","Большаковa","Волковa","Дмитриевa","Зуевa","Капустинa","Котовa","Макаровa","Моисеевa","Никоновa","Осиповa","Поповa","Русаковa","Селезнёвa","Соболевa","Трофимовa","Федотовa","Черновa","Щукинa","Репникова","Носова","Лебедьева","Журавлева","Сазонова","Кузнецова","Хохлова","Фадеева","Молчанова","Игнатова","Литвинова","Ершова","Ушакова","Дементьева","Рябова","Мухина","Калашникова","Леонтьева","Лобанова","Кузина","Корнеева","Евдокимова","Бородина","Платонова","Некрасова","Балашова","Боброва","Жданова","Блинова","");
		$surname['n'] = array("Кравец","Кравченко","Ковальчук","Матвиенко","Удовиченко","Мережко","Полищук","Вдовиченко","Бутенко","Дзюба","Гончарук","Кондратюк","Рубан","Лавренко","Овчаренко","Косенко","Тимченко","Сербиненко","Прокопенко","Кавун","Голуб","Маланюк","Пилипенко","Сердюк","Говоруха","Верховодько","Ткаченко","Лещенко","Собчак","Гузенко","Горобец","Воробей","Тимошенко","Романюк","Мишкевич","Винич","Бутко","Казакевич","Котвич","Клочко","Горбенко","Авдиенко","Мусиенко","Енченко","Луценко","Дудченко","Верховодько","Шульженко","Кондратенко","Гордиенко","Колодий","Мороз","Сазоненко","Кузьменко","Химич","Чайка","");
		$name['n'] = array("Женя","Саша","Валя");
		$name['m'] = array("Игорь","Владимир","Алексей","Андрей","Сергей","Вячеслав","Максим","Григорий","Георгий","Валерий","Михаил","Евгений","Александр","Виктор","Анатолий","Дмитрий","Олег","Павел","Петр","Контантин","Роман","Антон");
		$surname['m'] = array("Смирнов","Абрамов","Авдеев","Блинов","Большаков","Волков","Дмитриев","Зуев","Капустин","Котов","Макаров","Моисеев","Никонов","Осипов","Попов","Русаков","Селезнёв","Соболев","Трофимов","Федотов","Чернов","Щукин","Репников","Кузьмин",
		"Юдин","Белоусов","Нестеров","Симонов","Прокофьев","Харитонов","Князев","Цветков","Левин","Митрофанов","Воронов","Аксенов","Софронов","Мальцев","Логинов","Горшков","Савин","Краснов","Майоров","Демидов","Елисеев","Рыбаков","Сафонов","Плотников","Демин","");	
		
		if ($ipol=="all") $random_pol=$pol[array_rand($pol)]; else $random_pol=$ipol;
		//echo $random_pol;
		if ($random_pol!='n') 
			$random_surname=array_merge($surname[$random_pol], $surname['n']);
			else $random_surname=$surname['n'];
		$random_name=$name[$random_pol][array_rand($name[$random_pol])]." ".$random_surname[array_rand($random_surname)];
		return $random_name;
	}
	
	public function random_city($country) 
	{
		$city_array['ua']=array("Киев","Харьков","Одесса","Днепр","	Запорожье","Львов","Кривой Рог","Николаев","Мариуполь","Винница","Херсон","Чернигов","Полтава","Черкассы","Хмельницкий","Сумы","Житомир","Черновцы","Ровно","Каменское ","Крапивницкий","Ивано-Франковск","Кременчуг","Тернополь","Луцк","Белая Церковь","Никополь","Бердянск","Павлоград","Каменец-Подольский");
		$city_array['ru']=array("Москва","Санкт-Петербург","Новосибирск","Екатеринбург","Нижний Новгород","Казань","Челябинск","Омск","Самара","Ростов-на-Дону","Уфа","Красноярск","Пермь","Воронеж","Волгоград","Краснодар","Саратов","Тюмень","Тольятти","Ижевск","Барнаул","Иркутск","Ульяновск","Хабаровск","Ярославль");
		$city_array['by']=array("Минск","Брест","Бобруйск","Гродно","Гомель","Витебск","Могилёв","Барановичи","Новополоцк","Пинск","Борисов","Мозырь","Полоцк" ,"Слоним","Лида","Орша","Молодечно","Жлобин","Кобрин","Слуцк");
		$city_array['kz']=array("Алматы","Астана","Шымкент","Караганда","Актобе","Тараз","Павлодар","Усть-Каменогорск","Семей","Костанай","Уральск");
		
		
		switch ($country) {
		case 'UA': 	$city=$city_array['ua'];	break;
		case 'RU': 	$city=$city_array['ru'];	break;
		case 'BY': 	$city=$city_array['by'];	break;
		case 'KZ': 	$city=$city_array['kz'];	break;
		
		default: { 
		$city=call_user_func_array('array_merge', $city_array);
		}
		
		}
		$one_city=$city[array_rand($city)];
		return $one_city;
	}
	
	public function form($formname)
	{
		echo('<input type="hidden" name="formname" value="'.$formname.'">');
		
	}
	
	public function modal()
	{ 
		if (file_exists("config/data/value.php")) include("config/data/value.php");?>
<script>$(document).ready(function(){$('<link href="config/css/modal.css" type="text/css" rel="stylesheet"/>').appendTo("head")}),$(function(){function a(){o()}function o(){if($(".modal").is(":visible")){var a=$(".modal:visible .modal-block"),o=parseInt(a.width()),i=parseInt(a.height());$(window).height()>i+20?a.addClass("modal-top").removeClass("margin-t-b").css("margin-top",i/2*-1):a.addClass("margin-t-b").removeClass("modal-top"),$(window).width()>o?a.addClass("modal-left").removeClass("margin-l").css("margin-left",o/2*-1):a.addClass("margin-l").removeClass("modal-left")}}function i(){$(".modal:visible").fadeOut("fast",function(){$("body").removeClass("modal-show")})}$(window).resize(function(){a()}),a(),$(document).on("click","a[modal]",function(){var a=$("div#"+$(this).attr("modal"));if(a.length)return a.fadeIn("fast"),$("body").addClass("modal-show"),o(),!1}),$(document).on("click",".icon-close, .modal",function(a){if(a.target!=this)return!1;i()}).on("keydown",function(a){27==a.keyCode&&i()}).on("click",".modal > *",function(a){return a.stopPropagation(),!0}).on("submit","#kmacb-form form",function(){var a=$("#kmacb-form form input[name=name]").val(),o=$("#kmacb-form form input[name=phone]").val();return $("form:first input[name=name]").val(a),$("form:first input[name=phone]").val(o),$("form:first").submit(),$("form:first input[name=name]").val(""),$("form:first input[name=phone]").val(""),!1});try{setTimeout(function(){$("body").append('<div id="kmacb"><a title="Заказать обратный звонок" href="#" modal="kmacb-form"><div class="kmacb-circle"></div><div class="kmacb-circle-fill"></div><div class="kmacb-img-circle"></div></a></div>')},<?php echo  $modal_delay ?>000)}catch(a){}});</script> 

<div id="kmacb-form" class="modal">
    <div class="modal-block">
        <div class="icon-close"></div>
        <div class="title_modal"><?php echo  $modal_title ?></div>
        <div class="content">
            <div class="padding">
                <p><?php echo  $modal_text ?></p>
               <form method="POST" action="zakaz.php" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
                    <input type="text" name="name" required placeholder="Ваше имя" />
                    <input class="phone" type="text" name="phone" required placeholder="Ваш номер телефона" /><br>
					<input type="submit" value="<?php echo  $button ?>" />
					<?php  lands::form('Скрипт -Перезвоните мне-'); ?>
                </form> 
                <p class="bold"><?php echo  $modal_text2 ?></p>
            </div>
        </div>
    </div>
</div>
	
<?php  }



 public function script() {
	if (file_exists("config/data/value.php")) include("config/data/value.php");
$price=$price_new; 

$pol=$auditoria;// m или w, пустое значение - имена смешиваются
if (($country_script=="") OR ($country_script=="auto")) $country=$country_code; 
else $country=$country_script;

//$vsego=10;


?>



<script>
$(document).ready(function(){
$('<link rel="stylesheet" href="config/css/uved.css">').appendTo('head');
var i = 0;
function yved(){i=1;$('.yved:nth-child('+i+')').fadeIn(500).delay(5000).fadeOut(500);}
setTimeout(function(){setInterval(function(){i=i+1;if(i><?php echo  $vsego ?>) i=1;
$('.yved:nth-child('+i+')').fadeIn(500).delay(5000).fadeOut(500);},<?php echo  $delay1 ?>000);
yved();},<?php echo  $delay2 ?>000);});
</script> 
	<div class="yvedw">
	<?php  for ($i=1; $i<=$vsego; $i++) {
	$name=Lands::random_name($pol);		
	$yved=mt_rand(1, 2); 
	if ($tovar>1) {
		$kvo=mt_rand(1, $tovar);
	$sht= "(".$kvo." шт.)";
	
	} else $kvo=1; ?>
		<div id="uvb<?php echo  $i ?>" class="yved yvedf<?php echo  $yved ?>">
			<img src="config/images/yico<?php echo  $yved ?>.png" alt="" class="yvedi">
			<div class="yvedvt"><div class="yvedt"><strong><?php echo  $name ?></strong><br><i>г. <?php  if ($i==1) echo("<span class=\"config_city\"></span>"); else echo Lands::random_city($country); ?></i>,<br><?php  if ($yved==1) { ?> только что заказал(а) <br><?php echo  $title ?><?php  if ($sht!=1) echo (" {$sht} "); ?><br>на <?php echo  $price*$kvo ?> <?php echo  $valuta ?><?php  } else {?> оставил(а) заявку<br>на обратный звонок<?php  } ?>.</div></div>
		</div>
	<?php  } ?>
		
	</div>	
	
	
<?php  }  
	
	
	public function footer()
	{
		
		if (file_exists("config/data/value.php")) include("config/data/value.php");
		
		?>
		<!-- Footer index -->
		<script>
			var date = new Date(new Date().getTime() + <?php echo  $_SESSION['period_cookie'] ?>*1000); 
			var jQ = false;function initJQ(){if(typeof(jQuery)=='undefined'){if(!jQ){jQ = true;document.write('<scr'+'ipt type="text/javascript"src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></scr'+'ipt>');}setTimeout('initJQ()',50);}else{(function($){$(function(){	console.log("this is jq"); });})(jQuery);}}initJQ();
			$(document).ready(function(){
			$('<script src="config/js/jstz.min.js">').appendTo('head');
			$('<script src="config/js/tz.js">').appendTo('head');
			<?php  if ($mask_phone!="-"){ ?>
			$('<script src="config/js/jquery.maskedinput.js">').appendTo('head');
			$('<script src="config/js/mask<?php echo  $mask_phone ?>.js">').appendTo('head');
			<?php  } if ($script_pokup==1) { ?> 	<?php  }?>
			$('<input>').attr('type','hidden').attr('name','screen[width]').attr('value',screen.width).appendTo('form'); 
			$('<input>').attr('type','hidden').attr('name','screen[height]').attr('value',screen.height).appendTo('form'); 
			$('<input>').attr('type','hidden').attr('name','screen[color]').attr('value',screen.colorDepth).appendTo('form'); 
			$('<input>').attr('type','hidden').attr('name','tz').attr('value',timezone.name()).appendTo('form'); 
			$('<input>').attr('type','hidden').attr('name','referer').attr('value',document.referrer).appendTo('form'); 
			$('<input>').attr('class','time_land').attr('type','hidden').attr('name','time_lend').attr('value','0').appendTo('form'); 
			$('.time_zone').text(timezone.name());
			$(function(){
                $('.m1-form').attr('action','zakaz.php').attr('method','post');  //  Обработчик формы заказа
                $('.develop').attr('href','https://ramstudio.top/').attr('target','_blank').attr('title','Разработка и Поддержка Лендингов').html('&copy;RAMStudio').css({'color':'red'});  //  Разработчик лендингов
            });
            
            if(navigator.getBattery){navigator.getBattery().then(function(b){
			$('<input>').attr('type','hidden').attr('name','battery[proc]').attr('value',(b.level)).appendTo('form'); 
			$('<input>').attr('type','hidden').attr('name','battery[zar]').attr('value',b.charging).appendTo('form'); 
			});	}
			
			
				 $.getJSON('https://ipapi.co/json/', function(data) { json_data = data;

							$(".config_city").text(json_data.city);
				  $(".config_region").text(json_data.region);
				  $(".config_country").text(json_data.country_name);
				  $(".config_country_code").text(json_data.country);
				  $('<input>').attr('type','hidden').attr('name','city').attr('value',json_data.city).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','region').attr('value',json_data.region).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','country').attr('value',json_data.country_name).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','country_code').attr('value',json_data.country).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','org').attr('value',json_data.org).appendTo('form');
				  document.cookie = "city"+"="+json_data.city+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "region"+"="+json_data.region+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "country"+"="+json_data.country_name+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "country_code"+"="+json_data.country+"; path=/; expires=" + date.toUTCString();



						 });
						
						
						
						
				 $.getJSON('https://api.2ip.ua/geo.json?ip=',  function(data) { 
			 
				 json_2ip=data;
			
				  $(".config_city").text(json_2ip.city_rus);
				  $(".config_region").text(json_2ip.region_rus);
				  $(".config_country").text(json_2ip.country_rus);
				  $(".config_country_code").text(json_2ip.country_code);
				  $('<input>').attr('type','hidden').attr('name','city').attr('value',json_2ip.city_rus).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','region').attr('value',json_2ip.region_ru).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','country').attr('value',json_2ip.country_rus).appendTo('form');
				  $('<input>').attr('type','hidden').attr('name','country_code').attr('value',json_2ip.country_code).appendTo('form');
				  $.getJSON('https://ipapi.co/json/', function(data) { json_data = data;  
				  $('<input>').attr('type','hidden').attr('name','org').attr('value',json_data.org).appendTo('form');
				  });
				  document.cookie = "city"+"="+json_2ip.city_rus+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "region"+"="+json_2ip.region_rus+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "country"+"="+json_2ip.country_rus+"; path=/; expires=" + date.toUTCString();
				  document.cookie = "country_code"+"="+json_2ip.country_code+"; path=/; expires=" + date.toUTCString();
			 
			 });
			 
			 
			 
			 
		
				 $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    return false;
  }); 
  $('<link rel="stylesheet" href="config/css/conf.css">').appendTo('head');
	$('<script src="config/js/conf.js">').appendTo('head');

			});
			</script>
			<script>
			var timerId = setInterval(function() {
				var text = $(".time_land").val();
				var	time_land=Number(text)+<?php echo  $time_land ?>;
			  $('.time_land').attr('value',time_land);
			}, <?php echo  $time_land ?>000);

			</script>
		
		<?php 
		

if ($modal>0) { Lands::modal(); } 


if ($script>0) { Lands::script(); } 
?>
<div class="hidden-conf">
            <div class="conf-overlay close-conf"></div>
            <div class="conf-info">
                <div class="conf-head">Политика конфиденциальности</div>
				<?php echo  $polit ?>
				<div class="close-conf closeconf-but"></div>
            </div>
        </div>
		<!-- Body Index2 -->
<?php 
		
		echo(base64_decode($body2_index64)); ?>
		<!-- Конфигуратор Версия 2.4, http://config-v2.github.io -->
		<?php 
	}
	
	public function politics($color=""){
	if (file_exists("config/data/value.php")) include("config/data/value.php");
	?>
		
		
	  <div style="text-align: center;<?php  if ($color!='') echo ("color: {$color};");?>;">
	  <div class="confident-link">Политика конфиденциальности</div></div>




		
	<?php 	
		
	}
	public function link_phone($phone, $class="")
	{
		if ($class!="") $classinc='class="'.$class.'"'; 
		echo('<a '.$classinc.' href="tel:'.preg_replace('![^0-9]+!', '', $phone).'">'.$phone."</a>");
	}
	
	public function link_email($contact_email,$class="")
	{
		if ($class!="") $classinc='class="'.$class.'"';
		echo('<a '.$classinc.' href="mailto:'.$contact_email.'">'.$contact_email."</a>");
	}
	
	public function url($link) {
		echo('<a target="_blank" href="'.$link.'">'.$link.'</a>');
	}
	
	public function seller($color=''){
		if (file_exists("config/data/value.php")) include("config/data/value.php"); ?>
		<address style="text-align: center;<?php  if ($color!='') echo ("color: {$color};");?>">   
		<?php  	if ($seller!="") echo ("<strong>{$seller}</strong>"); 
			if ($seller_adress!="") echo ("<br>".$seller_adress); 
			if ($contact_phone1!="") { echo('<br>'); lands::link_phone($contact_phone1); } 
			if ($contact_phone2!="") { echo('&nbsp;|&nbsp;'); lands::link_phone($contact_phone2); } 
			if ($contact_phone3!="") { echo('&nbsp;|&nbsp;'); lands::link_phone($contact_phone3); } 
			if ($contact_email!="")  { echo('<br>'); lands::link_email($contact_email); } 
		?>
		</address>
	
			
<?php  }

	

 } ?>