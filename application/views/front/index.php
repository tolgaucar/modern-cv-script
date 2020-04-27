<?php 
foreach($ayarlar as $ayar){
	$title = $ayar->title;
	$description = $ayar->description;
	$keywords = $ayar->keywords;
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
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/perfect-scrollbar.css') ?>">
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
	        	<a href="<?php echo base_url('iletisim'); ?>"><button id="ustbuton" class="button is-rounded has-text-white is-hoverless">iletişim</button></a>
	        </div>
	    </div>
	</nav>
	<section class="hero is-white has-text-centered">
		<div class="hero-body">
			<div class="container">
				<div class="columns is-centered">
					<div class="column">
						<h1 id="meslekbaslik" class="title is-size-1-desktop is-size-2-tablet is-size-3-mobile">
							<?php echo $kim; ?>
						</h1>
						<h2 id="meslekalt" class="subtitle is-size-4-desktop is-size-5-tablet is-size-5-mobile">
							<?php echo $kimalt; ?>
						</h2>
						<img id="avatar" src="<?php echo base_url().$avatar; ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="hero-foot">
			<div class="container">
				<img id="backimg" class="is-bottom" src="<?php echo base_url('assets/front/img/ill.svg'); ?>">
			</div>
		</div>
	</section>
	<section id="arkaplan" class="hero has-text-centered has-text-white">
		<div class="hero-body">
			<div class="container">
				<section class="section is-long">
				<div class="columns is-centered">
					<div class="column is-three-fifths">
						<h1 id="ortabolumyazi" class="title is-spaced has-text-white is-size-2-desktop is-size-3-tablet is-size-4-mobile">
							<?php echo $yazi1; ?>
						</h1>
						<h2 id="ortaalt" s class="subtitle is-size-5-desktop is-size-7-tablet is-size-8-mobile has-text-white">
							<?php echo $yazi2; ?>
						</h2>
					</div>
				 </div>
				 </section>
			</div>
		</div>
	</section>
	<?php if($yeteneklerdurum == 1){ ?>
	<section class="hero has-text-white has-text-centered">
			<div class="hero-body">
				<div class="container">
				<div class="columns ">
					<div class="column">
						<h1 id="deneyimbaslik" class="title is-size-3-desktop is-size-4-tablet is-size-5-mobile is-spaced">Yeteneklerim</h1>
					</div>
				</div>
				<?php foreach($yetenekler as $yetenek){ ?>
				<div class="columns is-centered">
					<div class="column is-1 has-text-black">
						<span id="deneyimyazi"><?php echo $yetenek->yetenekisim; ?></span>
					</div>
					<div class="column is-6">
						<progress class="progress is-primary is-large" value="<?php echo $yetenek->deger; ?>" max="100"></progress>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</section><?php } ?>
	<?php if($calismalardurum == 1){ ?>
	<section <?php if($yeteneklerdurum==1){ echo 'id="arkaplan"';  } ?> class="hero has-text-centered has-text-white">
		<div class="hero-body">
			<div class="container">
				<h1 id="deneyimbaslik" class="title is-size-4-desktop is-size-5-tablet is-size-5-mobile <?php if($yeteneklerdurum==1){ echo 'has-text-white '; }?>is-spaced">Çalışmalarım</h1>
				<div class="columns">
					<?php foreach($calismalar as $calisma){ ?>
					<div class="column">
						<div class="box">
								<figure class="image is-square">
									<img src="<?php echo $calisma->resim; ?>">
								</figure><br>
								<label id="calismayazi"><?php echo $calisma->calismaad; ?></label>
						</div>
					</div><?php } ?>
				</div><br>
				<h2 id="deneyimbaslik" class="subtitle has-text-white">Daha fazlasını görmek istiyorsanız iletişim kısmından bana ulaşabilirsiniz.</h2>
			</div>
		</div>
	</section><?php } ?>
</body>

<?php 

// Durum 1 Beyaz Durum 2 Mor
if ($calismalardurum AND $yeteneklerdurum == 0) {
	$durum = 1;
}

if ($calismalardurum==1 AND $yeteneklerdurum == 0) {
	$durum = 0;
}

if($calismalardurum==0 and $yeteneklerdurum==0){
	$durum = 1;
}

if ($calismalardurum == 0 AND $yeteneklerdurum == 1) {
	$durum = 0;
}

if($calismalardurum == 1 AND $yeteneklerdurum == 1){
	$durum = 1;
}
 ?>

<footer <?php if($durum == 0){ echo 'id="arkaplan"'; }?> class="footer has-text-centered">
		<br><br>
		<h2 id="meslekalt" class="subtitle <?php if($durum==0){ echo 'has-text-white'; } ?>"><?php echo $footer; ?> tarafından <img src="<?php echo base_url('assets/front/img/kalp.png'); ?>"> ile hazırlandı.</span>
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