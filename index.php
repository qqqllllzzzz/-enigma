<? require $_SERVER['DOCUMENT_ROOT'].'/handlers/fnc/config.php'; ?>
<? include $_SERVER['DOCUMENT_ROOT'].'/handlers/fnc/assets.php';  ?>

<body class="bgshow">
<? include $_SERVER['DOCUMENT_ROOT'].'/interface/header.php';  ?>
	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 serverInfo">
					<img src="/interface/assets/images/picture_header.png" class="picture" alt="">
					<div class="nameServer"><?=$server_name?> это - <div class="line"></div></div>
					<div class="titleBox">
						<div class="title">Современный проект <br> <span>GTA 5 MP</span> </div>
						<div class="bg"></div>
					</div>
					<div class="desc col-lg-5 col-md-5">
					  <?=$description?>
					</div>
					<ul class="buttons_list">
						<a href="/interface/play.php" class="btn_link">
							<li>Начать играть</li>
						</a>
					</ul>
				</div>
			</div>
		</div>
	</section>
<? include $_SERVER['DOCUMENT_ROOT'].'/interface/footer.php';  ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/interface/assets/js/index.js"></script>
</body>
</html>