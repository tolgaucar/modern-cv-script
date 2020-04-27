<?php include 'inc/header.php'; ?>

  <section class="section">
    <div class="container">
      	<h1 class="title">Yetenek İşlemleri <a href="<?php echo base_url('yonetim/yetenekekle'); ?>"><button class="button is-warning is-rounded">Yetenek Ekle</button></a></h1>
      	<?php 
if ($this->session->flashdata('mesaj')) {
	echo $this->session->flashdata('mesaj');
}
 ?>

    	<div class="box">
				<div class="columns is-mobile">
				  <div class="column is-9">
				    <table class="table is-bordered is-striped is-hoverable is-fullwidth">
				      <thead>
				        <th>ID</th>
				        <th>Yetenek Başlığı</th>
				        <th>Yetenek Değeri</th>
				        <th>İşlemler</th>
				      </thead>
				      <tbody>
				      	<?php 
				      	foreach ($yetenekler as $yetenek) {
				      	 ?>
				        <tr>
				          <th><?php echo $yetenek->id; ?></th>
				          <td><?php echo $yetenek->yetenekisim; ?> </td>
				          <td>%<?php echo $yetenek->deger; ?></td>
				          <form action="<?php echo base_url('yonetim/yeteneksil'); ?>" method="post">
				          <td>
				          	<input hidden value="<?php echo $yetenek->id; ?>" type="text" name="id">
				          	<button class="button is-danger" type="submit" href="#">Sil</button></td>
				          </form>
				        </tr>
				    <?php } ?>
				      </tbody>
				    </table>
				  </div>
				</div>
    	</div>

    </div>
  </section>


<?php include 'inc/footer.php'; ?>