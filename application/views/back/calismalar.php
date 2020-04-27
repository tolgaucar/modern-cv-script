<?php include 'inc/header.php'; ?>

  <section class="section">
    <div class="container">
      	<h1 class="title">Çalışmalarım</h1>
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
				        <th>Çalışma Başlığı</th>
				        <th>İşlemler</th>
				      </thead>
				      <tbody>
				      	<?php 
				      	foreach ($calismalar as $calisma) {
				      	 ?>
				        <tr>
				          <th><?php echo $calisma->id; ?></th>
				          <td><?php echo $calisma->calismaad; ?> </td>
				          <form action="<?php echo base_url('yonetim/calismaduzenle'); ?>" method="post">
				          <td>
				          	<input hidden value="<?php echo $calisma->id; ?>" type="text" name="id">
				          	<button class="button is-info" type="submit">Düzenle</button></td>
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