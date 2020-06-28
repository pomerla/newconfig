<? require_once('config.php'); //  Подключаем конфигуратор ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<title><?= $product; // Продукт ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha256-bZLfwXAP04zRMK2BjiO8iu9pf4FbLqX6zitd+tIvLhE=" crossorigin="anonymous" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 75px;
  background-color: #f5f5f5;
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img style="max-width: 30px;" alt="Brand" src="config/favicon.png">
      </a>
    </div>
  </div>
</nav>
<div class="row">
  <div class="col-md-6">


	<h3><?= $product; // Продукт ?></h1>
    <p>Old prise:<?= $price_old; // Старая цена ?> <?= $currency; // Валюта ?></p>
     <p>New prise:<?= $price_new; // Новая цена ?> <?= $currency; // Валюта ?></p>
     <p>Sale:<?= $discount; // Скидка ?> %</p>
     <p><?= htmlspecialchars_decode($value1_html) ?></p>
     <p></p>
     
   </div> 
    
<div class="col-md-6">    
<form class="m1-form" action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
	
    <div class="form-group">
        <label for="Name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name"/>
    </div>
    
    <div class="form-group">
        <label for="Phone">Phone</label>
        <input class="form-control"  type="text" name="phone" placeholder="Phone"/>
    </div>
    
    
    <button class="btn btn-default" type="submit">submit</button>
</form>
  


</div>
</div>



</div>
<footer class="footer">
    <div class="container">
        <p><? lands::politics('red'); // Политика конфиденциальности ?></p>
        <a class="develop"></a>
    </div>
</footer>

<?  lands::footer(); // Финиш для скриптов /body ?>    
<script  type="text/javascript">
  var phone_masks = JSON.parse('{"RU":"+7(xxx)xxx-xx-xx","BY":"(+375 xx)xxx-xx-xx","KZ":"+7(xxx)xxx-xx-xx","UA":"+380","KG":"+996(xxx) xx-xx-xx","AZ":"+994(xx) xxx-xx-xx","AM":"(+374 xx) xxx-xxx","UZ":"(+998 xx) xxx-xx-xx","RO":"+40(xx)xxx-xx-xx","IT":"+39(xxx)xxx-xx-xx"}');    
  var phone_numbers = JSON.parse('{"RU":"7","BY":"375","KZ":"7","UA":"380","KG":"996","AZ":"994","AM":"374","UZ":"998","RO":"40","IT":"39"}');        
  var country_code_server ='UA';                 
  $(document).ready(function () {        
    $("input[name='phone']").val( phone_masks[country_code_server] );
  });
</script>    
</body>
</html>