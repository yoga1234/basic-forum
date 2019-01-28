<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Profile <?php echo $this->session->userdata("nama"); ?></h1>
      </div>
      <div>
        <?php
          if($this->session->userdata("nama") == "admin"){
            echo "<a href='".site_url('profile/daftar_user').">";
            echo "<button type='button' name='button' class='btn btn-outline-info' style='margin-top: 10px'>";
            echo "<i class='fas fa-list-ul'></i>";
            echo "Daftar User";
            echo "</button>";
            echo "</a>";
          }
        ?>
        <a href="<?php echo site_url('user'); ?>">
          <button type="button" name="button" class="btn btn-outline-info" style="margin-top: 10px">
            <i class="fas fa-key"></i>
            Ganti password
          </button>
        </a>
        <a href="<?php echo site_url('login/logout'); ?>">
          <button type="button" name="button" class="btn btn-outline-danger" style="margin-top: 10px">
            <i class="fas fa-sign-out-alt"></i>
            Logout
          </button>
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
                    <a href="<?php echo site_url('topik/ambil_topik/').$i->id_topik.'/'.'profile'?>">
                      <button class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                        Edit
                      </button>
                    </a>
                    <?php
                      if($this->session->userdata("nama") == $i->pengunggah){
                        echo "<button class='btn btn-danger' data-toggle='modal' data-target='#myModal' data-whatever='".site_url('home/hapus_topik/').$i->id_topik."/profile'>";
                        echo "<i class='fa fa-trash'></i>";
                        echo "Hapus";
                        echo "</button>";
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
