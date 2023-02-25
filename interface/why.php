<? require $_SERVER['DOCUMENT_ROOT'].'/handlers/fnc/config.php'; ?>
<? include $_SERVER['DOCUMENT_ROOT'].'/handlers/fnc/assets.php';  ?>

<body class="bgshow">
<? include $_SERVER['DOCUMENT_ROOT'].'/interface/header.php';  ?>

<section class="why_we">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 picture"><img alt="" src="/interface/assets/images/picture_why.png"></div>
			<div class="col-lg-6 col-md-12 info">
				<div class="title">
					Почему мы?<br>
					<span><?=$server_name?></span>
				</div>
				<div class="desc">
					<?=$description?>
				</div>
				<ul class="why_list">
					<li>
						<div class="icon"><img alt="" src="/interface/assets/images/icon_smile.png"></div>
						<div class="title">
							Интересная<br>
							игра!
						</div>
					</li>
					<li>
						<div class="icon"><img alt="" src="/interface/assets/images/icon_update.png"></div>
						<div class="title">
							Регулярные<br>
							обновления
						</div>
					</li>
					<li>
						<div class="icon"><img alt="" src="/interface/assets/images/icon_star.png"></div>
						<div class="title">
							Современный<br>
							игровой мод
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>