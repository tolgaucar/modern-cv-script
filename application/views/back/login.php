<?php 
if ($this->session->userdata('admin')) {
	redirect('yonetim/anasayfa');
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Sitesi - Yetkili Girişi</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bulmaswatch.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/css/genel.css') ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>

<body class="layout-default">
	<div class="columns is-gapless">
		<div id="kolon" class="column is-half">
			<section class="hero is-warning is-fullheight is-bold">
				<div class="hero-body">
					<section class="section">
							<h1 class="title">CV Sitesi Yetkili Girişi</h1>
							<h2 class="subtitle"></h2>
					</section>
				</div>
			</section>
		</div>
		<div class="column is-half is-mobile">
			<section class="hero is-fullheight is-light is-bold">
				<div class="hero-body">
					<div class="container">

						<div class="columns">
							<div class="column is-10">
								<?php if ($this->session->flashdata('mesaj')) {
									echo $this->session->flashdata('mesaj');
								} ?>
								<div id="giris" class="box">
									<h2 class="subtitle">Devam etmek için giriş yapınız.</h2>
									<form id="giris" method="post" action="<?php echo base_url('Yonetim/girisislem'); ?>">
										<div class="field">
											<input type="text" placeholder="E-mail adresiniz" class="input" name="mail">
										</div>
										<div class="field">
											<input type="password" placeholder="Şifreniz" class="input" name="sifre">
										</div>
										<div class="field">
											<center><button type="submit" class="button is-link is-bold">Giriş Yap</button></center>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
</html>