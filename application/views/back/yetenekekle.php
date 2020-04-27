<?php include 'inc/header.php'; ?>
<section class="section">
	<div class="container">
		<h1 class="title">Yetenek Ekle <a href="<?php echo base_url('yonetim/yetenekler'); ?>"><button class="button is-warning is-rounded">Yetenek İşlemleri</button></a></h3>
		<div class="box">
			<form method="post" action="<?php echo base_url('yonetim/yetenekislem') ?>">
				<div class="columns">
					<div class="column is-5">
						<div class="field">
							<label class="label">Yetenek Başlığı</label>
							<input type="text" placeholder="PHP - Codeigniter" id="baslik" class="input" name="baslik">
						</div>
						<div class="field">
							<label class="label">Yetenek Değeri</label>
							<input type="text" placeholder="35" id="baslik" class="input has-text-black" name="deger">
						</div>
						<button type="submit" class="button is-medium is-fullwidth is-rounded is-primary">Ekle</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>
<script type="text/javascript">
CKEDITOR.replace( 'editor' );
</script>
<?php include 'inc/footer.php'; ?>
