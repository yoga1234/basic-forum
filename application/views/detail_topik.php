<div class="container bg-light mt-5">
  <div class="row">
    <div class="col-md-12">
      <?php

      ?>
      <a href="<?php echo site_url($content_topik['var_halaman']);?>" class="btn btn-outline-info mt-5 mb-5">
        <i class="fas fa-chevron-left"></i>
        Kembali
      </a>
      <hr>
      <?php
        foreach ($content_topik['data_topik'] as $i) {
          ?>
            <h3><?php echo $i['judul_topik']; ?></h3>
            <h6 class="mb-5"><?php echo "Diunggah oleh ".$i['pengunggah'];?></h6>
            <p class="mb-5"><?php echo $i['konten_topik']; ?></p>
          <?php
        }
      ?>
      <hr>
      <h4>Komentar</h4>
      <form class="" action="<?php echo site_url('topik/tambah_komentar/').$i['id_topik'].'/'.$this->uri->segment(4) ?>" method="post">
        <label for="Komentar">Tambah Komentar</label>
        <textarea class="form-control" name="isi_komentar" rows="4" cols="80"></textarea>
        <button type="submit" class="btn btn-outline-info mt-5 mb-5" name="submit">
          <i class="fas fa-plus"></i>
          Tambah
        </button>
      </form>
      <hr>
      <?php
        foreach ($content_topik['komentar'] as $key) {
          ?>
          <h5>Komentar oleh <?php echo $key['pengomentar']; ?></h5>
          <p><?php echo $key['isi_komentar']; ?></p>
          <hr class="mb-4 ">
          <?php
        }
      ?>
    </div>
  </div>
</div>
