<?php include 'inc/header.php'; ?>
<section class="section">
	<div class="container">
		<h1 class="title">Çalışma Düzenle <a href="<?php echo base_url('yonetim/calismalar'); ?>"><button class="button is-warning is-rounded">Çalışma İşlemleri</button></a></h3>
		<div class="box">
			<form enctype="multipart/form-data" method="post" action="<?php echo base_url('yonetim/calismaislem'); ?>">
				<div class="columns">
					<div class="column is-5">
						<?php foreach($calismalar as $calisma){ ?>
						<div class="field">
							<label class="label">Çalışma Başlığı</label>
							<input type="text" value="<?php echo $calisma->calismaad; ?>" id="baslik" class="input" name="baslik">
							<input hidden type="text" value="<?php echo $id; ?>" name="id">
						</div>
						<div class="field">
							<label class="label">Çalışma Resmi</label>
							<div class="file">
							  <label class="file-label">
							    <input class="file-input" type="file" name="resim">
							    <span class="file-cta">
							      <span class="file-icon">
							        <i class="fas fa-upload"></i>
							      </span>
							      <span class="file-label">
							       Çalışma Resmi Seç
							      </span>
							    </span>
							  </label>
							</div>
						</div>
						<button type="submit" class="button is-medium is-fullwidth is-rounded is-primary">Düzenle</button>
					</div><?php } ?>
				</div>
			</form>
		</div>
	</div>
</section>
<?php include 'inc/footer.php'; ?>
