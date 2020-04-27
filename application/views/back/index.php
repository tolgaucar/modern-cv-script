<?php 
$this->load->view("back/inc/header");
 $bilgi = $this->session->userdata('bilgi'); 
 ?>
 
<div class="columns is-centered is-mobile">
  <div class="column is-9 has-text-light">
    <div class="notification is-info bildirge">
      <i class="fa fa-bullhorn" aria-hidden="true"></i>
      <b></b>
      <span>Hoş geldiniz <?php echo $bilgi->adsoyad; ?></span>
    </div>
  </div>
</div>

<div id="gosterge" class="columns is-centered is-mobile">
  <div class="column is-9">
    <div class="card">
        <div class="card-content">
          <div class="content has-text-centered">
            <h1 class="is-size-2 is-size-3-mobile has-text-white"><?php echo $this->db->count_all_results('iletisim'); ?></h1>
            <h2 class="is-size-3 is-size-6-mobile has-text-white">Toplam Mesaj</h2>
          </div>
      </div>
  </div>
</div>

</div>

<div class="columns is-mobile is-centered">
  <div class="column is-9">
    <h1 class="title is-size-3 is-size-6-mobile is-size-6-tablet">Son Mesajlar</h1>
    <table class="table is-bordered is-striped is-hoverable is-fullwidth">
      <thead>
        <th>ID</th>
        <th>Mesaj Başlığı</th>
        <th>Mesaj Sahibi</th>
      </thead>
      <tbody>
        <?php foreach($mesajlar as $mesaj){ ?>
        <tr>
         <th><?php echo $mesaj->id; ?></th>
         <td><?php echo $mesaj->baslik; ?> </td>
         <td><?php echo $mesaj->adsoyad; ?> </td>
        </tr><?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php 
$this->load->view("back/inc/footer");
 ?>