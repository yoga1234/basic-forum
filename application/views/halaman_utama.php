  <section id="header">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>Basic Forum</h1>
    </div>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-8">
          <h3>Selamat datang, <?php echo $this->session->userdata("nama"); ?></h3>
        </div>
        <div class="col-md-3">
          <a href="<?php echo site_url('profile') ?>" class="btn btn-outline-info float-right" style="margin-right: 10px;">
            <i class="fas fa-user"></i>
            profile
          </a>
        </div>
        <div class="col-md-1">
          <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-outline-danger float-right">
            <i class="fas fa-sign-out-alt"></i>
            Logout
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container bg-light" style="margin-bottom: 50px; padding-bottom: 30px">
      <div class="tambah-topik">
        <a href="<?php echo site_url('tambah_topik'); ?>" class="btn btn-outline-primary">
          <i class="fas fa-plus"></i>
          Tambah Topik
        </a>
      </div>
      <div class="datatable">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Pengunggah</th>
              <th style="width: 250px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($content as $i){
                ?>
                <tr>
                  <td><?php echo $i->judul_topik?></td>
                  <td><?php echo $i->pengunggah?></td>
                  <td>
                    <a href="<?php echo site_url('topik/lihat_topik/').$i->id_topik.'/'.'home';?>">
                      <button class="btn btn-primary">
                        <i class="fa fa-search"></i>
                        Lihat
                      </button>
                    </a>
                    <?php
                      if($this->session->userdata("nama") == $i->pengunggah or $this->session->userdata("nama") == "admin"){
                        $idTopik = $i->id_topik;
                        echo "<a href=".site_url('topik/ambil_topik/').$i->id_topik."/".'home'.">";
                        echo "<button class='btn btn-info'>";
                        echo "<i class='fa fa-pencil-alt'></i>";
                        echo " Edit";
                        echo "</button>";
                        echo "</a> ";
                        echo "<button class='btn btn-danger' data-toggle='modal' data-target='#myModal' data-whatever='".site_url('home/hapus_topik/').$i->id_topik."/home'>";
                        echo "<i class='fa fa-trash'></i>";
                        echo " Hapus";
                        echo "</button>";
                      }
                    ?>
                  </td>
                </tr>
                <?php
              }
            ?>
          </tbody>
        </div>
      </div>
    </section>
    
