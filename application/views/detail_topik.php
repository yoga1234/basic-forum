<div class="container bg-light mt-5">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo site_url('home');?>" class="btn btn-outline-info mt-5 mb-5">
        <i class="fas fa-chevron-left"></i>
        Kembali
      </a>
      <?php
        foreach ($data_topik as $i) {
          ?>
            <h3><?php echo $i['judul_topik']; ?></h3>
            <h6 class="mb-5"><?php echo "Diunggah oleh ".$i['pengunggah'];?></h6>
            <p class="mb-5"><?php echo $i['konten_topik']; ?></p>
          <?php
        }
      ?>
      <!--<h3>Judul konten berada disini</h3>
      //<h5 class="pb-4">Pengunggah berada disini</h5>
      //<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      -->
      <hr>
      <h4>Komentar</h4>
      <form class="" action="index.html" method="post">
        <label for="Komentar">Tambah Komentar</label>
        <textarea class="form-control" name="name" rows="4" cols="80"></textarea>
        <a href="#" class="btn btn-outline-info mt-5 mb-5">
          <i class="fas fa-plus"></i>
          Tambah
        </a>
      </form>
      <hr>
      <h5>Komentar oleh pengunggah</h5>
      <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
