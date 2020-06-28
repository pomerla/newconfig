<? require_once('config.php'); //  Подключаем конфигуратор ?>
<?php
//bg
$rans_bg = random_int(0, 3);
//header
$txt_header = file('config/images/header.txt'); 
$str_header = $txt_header[ array_rand($txt_header) ]; 
unset($txt_header); 
//content
$txt_content = file('config/images/content.txt'); 
$str_content = $txt_content[ array_rand($txt_content) ]; 
unset($txt_content); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>
<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251" />
	<TITLE><?= $str_header; // header ?></TITLE>
	<meta name="description" content="<?= $str_content; // content ?>">
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
body {
  background: url('config/images/bg_<?= $rans_bg; ?>.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

.card{
    background-color: aliceblue;
    padding: 1em;
    margin-top: 15px;
    text-align: center;
}
.h1, h1 {
    font-size: 30px;
}
.lead {
    font-size: 18px;
}
</style>    
</head>
<body>
<div class="container">

<div class="card border-0 shadow my-5">
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

    <div class="card-body p-5">
      <h1 class="font-weight-light"><?= $str_header; ?></h1>
      <p class="lead">
      <?= $str_content; ?>
      </p>
    </div>
     
   </div> 
    
<div class="col-md-6">    
<form id="mform" class="form-horizontal thumbnail" role="form" action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;"> 
							<legend>Оставьте заявку</legend>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">ФИО:</label>
									<div class="col-sm-10">
										<input type="text" name="name" required class="form-control" placeholder="Имя">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Телефон:</label>
									<div class="col-sm-10">
										<input type="text" name="phone" class="form-control" required placeholder="Телефон">
									</div>
								</div>
							
								<div class="form-group text-center">		
									<input class="btn btn-primary" type="submit" value="Отправить">
								</div>	
								<? lands::form('Главная форма'); // Имя формы с заказом ?>
								<input type="hidden" name="comment" value="sfdgsdfsdfsdfsdf">
						</form>
  
<?  lands::footer(); // Финиш для скриптов /body ?>

</div>
<? lands::politics('red'); // Политика конфиденциальности ?>
</div>
</div>
 </div>    
    
</body>
</html>
