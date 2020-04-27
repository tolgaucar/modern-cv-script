<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Sitesi - Kontrol Paneli</title>
    <?php $bilgi = $this->session->userdata('bilgi'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bulmaswatch.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/back/css/genel.css') ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  </head>
  <body>
  <nav class="navbar is-warning" role="navigation" aria-label="dropdown navigation">
          <div class="navbar-brand">
              <p id="baslik" style="color: #5A5A5A;" class="navbar-item">
                Yönetim Paneli
              </p>
              <span class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
           <div id="navMenu" class="navbar-menu">
                <a href="<?php echo base_url('yonetim/anasayfa'); ?>" class="navbar-item">Anasayfa</a>
                <a href="<?php echo base_url('yonetim/yetenekler'); ?>" class="navbar-item">Yetenekler</a>
                <a href="<?php echo base_url('yonetim/calismalar') ?>" class="navbar-item">Çalışmalarım</a>
                <a href="<?php echo base_url('yonetim/mesajlar') ?>" class="navbar-item">Mesajlar</a>
                <a href="<?php echo base_url('yonetim/ayarlar') ?>" class="navbar-item">Genel Ayarlar</a>

            <div class="navbar-end">
              <div class="navbar-item has-dropdown dropdown">
              <a class="navbar-link is-arrowless">
                <b><span><?php echo $bilgi->adsoyad; ?></span></b>
              </a>
                <div class="navbar-dropdown is-right">
                  <a target="_blank" class="navbar-item" href="<?php echo base_url(); ?>">Siteyi Görüntüle</a>
                  <a class="navbar-item" href="<?php echo base_url('yonetim/cikis'); ?>">Çıkış Yap</a>
                </div>
              </div>
            </div>

        </div>
  </nav>

