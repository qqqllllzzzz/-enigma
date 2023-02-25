<? include $_SERVER['DOCUMENT_ROOT'].'/handlers/fnc/assets.php';  ?>

<body class="bgshow">
<? include $_SERVER['DOCUMENT_ROOT'].'/interface/header.php';  ?>

<section class="donate_content">
	<div class="container">
		<div class="row">
			<div class="donate_block">
				<div class="title">
					<div class="name">Донат счет</div>
					<div class="break"></div>
				</div>
				<form action="">
					<div class="input_wrap">
						<div class="label">Укажите ваш ник</div>
						<input type="text">
					</div>
					<div class="input_wrap">
						<div class="label">Укажите сумму</div>
						<input type="text">
					</div>
					<div class="footer_wrap">
						<button>пополнить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<? include $_SERVER['DOCUMENT_ROOT'].'/interface/footer.php';  ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/interface/assets/js/index.js"></script>