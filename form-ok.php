<? include('config.php'); $back_link='<a href="javascript: history.back(-1);">'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Спецпредложение от нашего интернет-магазина, товары по супер цене!</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="image/x-icon" rel="icon" href="config/thenks/favicon.ico">
		<link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
		<link type="text/css" rel="stylesheet" href="config/thenks/css/upsell.css">
		<script type="text/javascript" src="config/thenks/js/jquery.min.js"></script>	
	<script type="text/javascript" src="config/thenks/js/upsell.js"></script>
	
<script>localStorage.clear();</script>
<?= base64_decode($head_thanks64) ?>	
</head>
<body class="man">
<?= base64_decode($body_thanks64) ?>
		<div class="section block-1">
			<div class="wrap">
				<img src="config/thenks/img/call-girl.png">
				<div class="top-title">
					<h2><?= $thanks1 ?></h2>
					<div><?= $thanks2 ?></div>
					<p><b style="color:black">Oператоры работают без выходных с 08:00 до 00:00 по Киевскому времени</b></p>
				</div>
			</div>
		</div>
		<div class="section block-2">
			<div class="wrap">
				<h1>ОБЯЗАТЕЛЬНО ПРОЛИСТАЙТЕ ВСЕ ДО КОНЦА!!!</h1>
				<p>Для всех новых клиентов эксклюзивная 15-минутная акция!</p>
			</div>
		</div>
		<center class="timer">
			<script src="config/thenks/js/timer.js"></script>
		</center>
		<div class="section block-3">
			<div class="wrap">
                
                <? if ($upsel){ ?>
                <div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-<?= $upsel_sale;?>%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big">
								<img src="<? if ($upsel){ echo ('config/upsel_img/'.$upsel_pic.'" height="'.$upsel_pic_h.''); } ?>" class="image0">
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3><?php echo $upsel_title; ?></h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost"><?php echo $upsel_oldprise; ?></span>
							<span class="new-cost"><?php echo $upsel_newprise; ?> грн</span>
						</div>
						<?php echo $upsel_comment; ?>
                        <?php if($upsel_url){ ?>
                            <button onclick="location.href='<?php echo $upsel_url;  ?>';"  class="tov-button animate"><?php echo $upsel_url_title;  ?></button>
					    <?php } ?>
                    </div>
				</div>
                <?php } ?>
                
                
                <? if ($upsel_2){ ?>
                <div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-<?= $upsel_sale_2;?>%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big">
								<img src="<? if ($upsel_2){ echo ('config/upsel_img/'.$upsel_pic_2.'" height="'.$upsel_pic_h_2.''); } ?>" class="image0">
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3><?php echo $upsel_title_2; ?></h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost"><?php echo $upsel_oldprise_2; ?></span>
							<span class="new-cost"><?php echo $upsel_newprise_2; ?> грн</span>
						</div>
						<?php echo $upsel_comment_2; ?>
                        <?php if($upsel_url_2){ ?>
                            <button onclick="location.href='<?php echo $upsel_url_2;  ?>';"  class="tov-button animate"><?php echo $upsel_url_title_2;  ?></button>
					    <?php } ?>
                    </div>
				</div>
                <?php } ?>
                
                
                <? if ($upsel_3){ ?>
                <div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-<?= $upsel_sale_3;?>%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big">
								<img src="<? if ($upsel_3){ echo ('config/upsel_img/'.$upsel_pic_3.'" height="'.$upsel_pic_h_3.''); } ?>" class="image0">
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3><?php echo $upsel_title_3; ?></h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost"><?php echo $upsel_oldprise_3; ?></span>
							<span class="new-cost"><?php echo $upsel_newprise_3; ?> грн</span>
						</div>
						<?php echo $upsel_comment_3; ?>
                        <?php if($upsel_url_3){ ?>
                            <button onclick="location.href='<?php echo $upsel_url_3;  ?>';"  class="tov-button animate"><?php echo $upsel_url_title_3;  ?></button>
					    <?php } ?>
                    </div>
				</div>
                <?php } ?>
                
                
                <? if ($upsel_4){ ?>
                <div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-<?= $upsel_sale_4;?>%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big">
								<img src="<? if ($upsel_4){ echo ('config/upsel_img/'.$upsel_pic_4.'" height="'.$upsel_pic_h_4.''); } ?>" class="image0">
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3><?php echo $upsel_title_4; ?></h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost"><?php echo $upsel_oldprise_4; ?></span>
							<span class="new-cost"><?php echo $upsel_newprise_4; ?> грн</span>
						</div>
						<?php echo $upsel_comment_4; ?>
                        <?php if($upsel_url_4){ ?>
                            <button onclick="location.href='<?php echo $upsel_url_4;  ?>';"  class="tov-button animate"><?php echo $upsel_url_title_4;  ?></button>
					    <?php } ?>
                    </div>
				</div>
                <?php } ?>
                
                <? if ($upsel_5){ ?>
                <div class="tov-item tov-rate-1 clearfix">
					<span class="tov-item-sale">-<?= $upsel_sale_5;?>%</span>
					<div class="tov-left-cont">
						<div class="tov-gal clearfix">
							<div class="tov-gal-big">
								<img src="<? if ($upsel_5){ echo ('config/upsel_img/'.$upsel_pic_5.'" height="'.$upsel_pic_h_5.''); } ?>" class="image0">
							</div>
						</div>
					</div>
					<div class="tov-info">
						<h3><?php echo $upsel_title_5; ?></h3>
						<div class="tov-info-rate"></div>
						<div class="tov-info-cost">
							<span class="old-cost"><?php echo $upsel_oldprise_5; ?></span>
							<span class="new-cost"><?php echo $upsel_newprise_5; ?> грн</span>
						</div>
						<?php echo $upsel_comment_5; ?>
                        <?php if($upsel_url_5){ ?>
                            <button onclick="location.href='<?php echo $upsel_url_5;  ?>';"  class="tov-button animate"><?php echo $upsel_url_title_5;  ?></button>
					    <?php } ?>
                    </div>
				</div>
                <?php } ?>
                
                
                
                
                
                
                
                
             <center>
             <div class="success">
                <ul class="list_info">
                    <? if ($_SESSION['name']!="") { ?><li><span>Имя:  </span><span ><?= $_SESSION['name'] ?></span></li><? } ?>
                    <? if ($_SESSION['phone']!="") { ?><li><span>Телефон: </span><span><?= $_SESSION['phone'] ?></span></li><? } ?>
                </ul>
                <br/><span id="submit"></span>
            </div>
    		  <?= str_ireplace("%back_link%", $back_link, $thanks3); ?>	
             </center>
			</div>
		</div>
		<div class="section footer"> 
			<div class="wrap clearfix">
				<div class="left clearfix foot-logo">
					<p>(c)Copyright <?= date('Y'); ?></p>
				</div>
				<div class="right"><p></p></div>
			</div>
		</div>
	

	</body>
</html>





























