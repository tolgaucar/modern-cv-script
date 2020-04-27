<?php include 'inc/header.php'; ?>
<section class="section">
	<div class="container">
		<h1 class="title">Genel Ayarlar</h1>
		      	<?php 
if ($this->session->flashdata('mesaj')) {
	echo $this->session->flashdata('mesaj');
}

 ?>

		<div class="box">
			<?php foreach($ayarlar as $ayar){ ?>
			<div class="columns">
				<div class="column is-12">
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('yonetim/ayarguncelle'); ?>">
					
					<div class="field">
						<label class="label">Title</label>
						<input class="input" value="<?php echo $ayar->title; ?>" type="text" name="title">
					</div>					
					<div class="field">
						<label class="label">Site Başlığı</label>
						<input class="input" value="<?php echo $ayar->sitebaslik; ?>" placeholder="Sitenin sol üstündeki başlık" type="text" name="sitebaslik">
					</div>					
					<div class="field">
						<label class="label">Meta Açıklaması:</label>
						<input class="input" value="<?php echo $ayar->description; ?>" placeholder="Maksimum 300 karakter" type="text" name="description">
					</div>					
					<div class="field">
						<label class="label">Meta Anahtar Kelimeleri:</label>
						<input class="input" value="<?php echo $ayar->keywords; ?>" placeholder="Maksimum 300 karakter" type="text" name="keywords">
					</div>
					<div class="field">
						<label class="label">Kişi Yetkinlik Bilgisi</label>
						<input class="input" type="text" value="<?php echo $ayar->kim; ?>" placeholder="Yazılımcı & R10 Üyesi" name="kim">
					</div>					
					<div class="field">
						<label class="label">Kişi Açıklama:</label>
						<input class="input" type="text" value="<?php echo $ayar->kimalt; ?>" placeholder="Yeni teknolojilere meraklı, sosyal bir girişimci" name="kimalt">
					</div>					
					<div class="field">
						<label class="label">Kişi Tanıtma:</label>
						<input class="input" type="text" value="<?php echo $ayar->yazi1; ?>" placeholder="Merhabalar, benim adım Lorem" name="yazi1">
					</div>
					<div class="field">
						<label class="label">Kişi Uzun Açıklama:</label>
						<textarea class="textarea" type="text" placeholder="Tanıtmanın altındaki uzun açıklama bölümü." name="yazi2"><?php echo $ayar->yazi2; ?></textarea>
					</div>					
					<div class="field">
						<label class="label">Footerdaki İsim:</label>
						<input class="input" type="text" value="<?php echo $ayar->footer; ?>" placeholder="XXX tarafından hazırlanmıştır bölümündeki XXX" name="footer">
					</div>
					<div class="field">
						<label class="label">Çalışmalar Bölümü</label>
						<div class="select is-rounded">
						  <select name="calismalar">
						    <option <?php if($ayar->calismalar==1){  echo 'selected'; } ?> value="1">Açık</option>
						    <option <?php if($ayar->calismalar==0){  echo 'selected'; } ?> value="0">Kapalı</option>
						  </select>
						</div>
					</div>					
					<div class="field">
						<label class="label">Yetenekler Bölümü</label>
						<div class="select is-rounded">
						  <select name="yetenekler">
						    <option <?php if($ayar->yetenekler==1){  echo 'selected'; } ?> value="1">Açık</option>
						    <option <?php if($ayar->yetenekler==0){  echo 'selected'; } ?> value="0">Kapalı</option>
						  </select>
						</div>
					</div>
					<div class="field">
						<label class="label">Avatar Resmi</label>
						<div class="file">
						  <label class="file-label">
						    <input class="file-input" type="file" name="file">
						    <span class="file-cta">
						      <span class="file-icon">
						        <i class="fas fa-upload"></i>
						      </span>
						      <span class="file-label">
						       Avatar Resmi Seç
						      </span>
						    </span>
						  </label>
						</div>
					</div>

					<button type="submit" class="button is-rounded is-normal is-primary">Kaydet</button>
					</form>
				</div>
<?php } ?>
			</div>
			
		</div>

	</div>
</section>
<?php include 'inc/footer.php'; ?>