<?php 

foreach($ayarlar as $ayar){
	$title = $ayar->title;
	$sitebaslik = $ayar->sitebaslik;
	$kim = $ayar->kim;
	$kimalt = $ayar->kimalt;
	$avatar = $ayar->avatar;
	$yazi1 = $ayar->yazi1;
	$yazi2 = $ayar->yazi2;
	$footer = $ayar->footer;
	$calismalardurum = $ayar->calismalar;
	$yeteneklerdurum = $ayar->yetenekler;
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/style.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
</head>
<body>
	<nav class="navbar is-transparent is-spaced is-white">
	    <div class="navbar-brand">
	       <a href="<?php echo base_url(); ?>"><span id="baslik" class="navbar-item is-size-5 is-size-4-mobile">
			<?php echo $sitebaslik; ?>
			</span></a>
	      <span class="navbar-burger burger" data-target="ust">
            <span></span>
            <span></span>
            <span></span>
          </span>
	    </div>
	    <div id="ust" class="navbar-menu">
	        <div class="navbar-end">
	        	<a href="<?php echo base_url('anasayfa'); ?>"><button id="ustbuton" class="button is-rounded has-text-white is-hoverless">anasayfa</button></a>
	        </div>
	    </div>
	</nav>

<section id="arkaplan" class="hero">
	<div class="hero-body">
		<div class="container has-text-centered">
		<h1 id="meslekust" class="title has-text-white">Buraya kadar bana ulaşmak için geldiğinizden dolayı teşekkür ederim!</h1>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">

			<div class="columns is-centered">
				<div class="column is-5">
					<?php if($this->session->flashdata('mesaj')){ echo $this->session->flashdata('mesaj'); }  ?>
					<form method="post" action="<?php echo base_url('anasayfa/mesajgonder'); ?>">
					<div class="field">
							<label id="iletisimyazi" class="has-text-black">Adınız Soyadınız</label>
							<input name="adsoyad" class="input is-focused"></input>	
					</div>
					<div class="field">
							<label id="iletisimyazi" class="has-text-black">E-mail adresiniz:</label>
							<input name="email" class="input is-focused"></input>	
					</div>
					<div class="field">
							<label id="iletisimyazi" class="has-text-black">Telefon numaranız:</label>
							<input name="telno" class="input is-focused"></input>	
					</div>
					<div class="field">
							<label id="iletisimyazi" class="has-text-black">Başlık:</label>
							<input name="baslik" class="input is-focused">
					</div>					
					<div class="field">
							<label id="iletisimyazi" class="has-text-black">Mesajınız</label>
							<textarea name="mesaj" class="textarea is-focused"></textarea>	
					</div>
					<div class="field has-text-centered">
						<button id="arkaplan" type="submit" class="button has-text-white is-rounded is-medium">Gönder!</button>
					</div>
					</form>
				</div>
			</div>
	</div>
</section>
<footer id="arkaplan" class="footer has-text-centered">
		<br><br>
		<h2 id="meslekalt" class="subtitle has-text-white"><?php echo $footer; ?> tarafından <img src="<?php echo base_url('assets/front/img/kalp.png'); ?>"> ile hazırlandı.</span>
</footer>
    <script type="text/javascript">
      (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function(){
          burger.classList.toggle('is-active');
          nav.classList.toggle('is-active');
        });
      })();
    </script>