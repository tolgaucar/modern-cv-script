<?php include 'inc/header.php'; ?>
<?php 
	foreach($mesaj as $row){
		$id = $row->id;
		$sahip = $row->adsoyad;
		$mail = $row->email;
		$tel = $row->telno;
		$baslik = $row->baslik;
		$mesaj = $row->mesaj;
	}
 ?>
  <section class="section">
    <div class="container">
      	<h1 class="title">Mesaj Detayları</h1>
    	<div class="box">
				<div class="columns is-mobile">
				  <div class="column is-9">
				  	<div class="field">
				  		<label class="label">Yazan: </label>
				  		<span><?php echo $sahip; ?></span>
				  	</div>				  	
				  	<div class="field">
				  		<label class="label">Mail Adresi: </label>
				  		<span><?php echo $mail; ?></span>
				  	</div>
				    <div class="field">
				  		<label class="label">Telefon Numarası: </label>
				  		<span><?php echo $tel; ?></span>
				  	</div>				    
				  	<div class="field">
				  		<label class="label">Mesaj Başlığı: </label>
				  		<span><?php echo $baslik; ?></span>
				  	</div>				  	
				  	<div class="field">
				  		<label class="label">Mesaj İçeriği: </label>
				  		<span><?php echo $mesaj; ?></span>
				  	</div>
				  	<div class="field">
				  		<form method="post" action="<?php echo base_url('yonetim/mesajsil'); ?>">
					  		<input type="text" hidden value="<?php echo $id; ?>" name="id">
					  		<button type="submit" class="button is-danger">Sil</button>
				  			<a class="button is-info" href="<?php echo base_url('yonetim/mesajlar') ?>">Geri Dön</a>
				  		</form>
				  	</div>
				  </div>
				</div>
    	</div>

    </div>
  </section>


<?php include 'inc/footer.php'; ?>