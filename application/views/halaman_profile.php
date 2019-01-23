<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Profile <?php echo $this->session->userdata("nama"); ?></h1>
      </div>
      <div class="col-md-8">
        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-outline-danger float-right" style="margin-top: 10px">
          <i class="fas fa-sign-out-alt"></i>
          Logout
        </a>
      </div>
    </div>
    <a href="<?php echo site_url('home'); ?>" class="btn btn-outline-info" style="margin-top: 20px">
      <i class="fas fa-chevron-left"></i>
      Kembali
    </a>
  </div>
</div>
<div class="content">
  <div class="container bg-light" style="margin-bottom: 20px">
    <h3 style="margin-top: 30px">Topik Yang Anda Buat</h3>
    <div class="datatable" style="margin-top: 30px">
      <table id="example" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Pengunggah</th>
            <th style="width: 240px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($content as $i) {
              ?>
                <tr>
                  <td><?php echo $i->judul_topik ?></td>
                  <td><?php echo $i->pengunggah ?></td>
                  <td>
                    <a href="<?php echo site_url('topik/lihat_topik/').$i->id_topik.'/'.'profile';?>">
                      <button class="btn btn-primary">
                        <i class="fa fa-search"></i>
                        Lihat
                      </button>
                    </a>
                    <a href="<?php echo site_url('topik/ambil_topik/').$i->id_topik;?>">
                      <button class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                        Edit
                      </button>
                    </a>
                    <?php
                      if($this->session->userdata("nama") == $i->pengunggah){
                        echo "<a href=".site_url('profile/hapus_topik/').$i->id_topik.">";
                        echo "<button class='btn btn-danger'>";
                        echo "<i class='fa fa-trash'></i>";
                        echo "Hapus";
                        echo "</button>";
                        echo "</a>";
                      }
                    ?>
                  </td>
                </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
