<?php include 'inc/header.php'; ?>

  <section class="section">
    <div class="container">
      	<h1 class="title">Mesajlar</h1>
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
				        <th>Mesaj Başlığı</th>
				        <th>Mesaj Sahibi</th>
				        <th>İşlemler</th>
				      </thead>
				      <tbody>
				      	<?php 
				      	foreach ($mesajlar as $mesaj) {
				      	 ?>
				        <tr>
				          <th><?php echo $mesaj->id; ?></th>
				          <td><?php echo $mesaj->baslik; ?> </td>
				          <td><?php echo $mesaj->adsoyad; ?> </td>
				          <td>
				          	<form action="<?php echo base_url('yonetim/mesajoku'); ?>" method="post">
				          	<input hidden value="<?php echo $mesaj->id; ?>" type="text" name="id">
				          	<button class="button is-info" type="submit">Oku</button>
				          	</form>
				          </td>          
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