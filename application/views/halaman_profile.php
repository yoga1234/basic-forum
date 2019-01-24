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
                    <a href="<?php echo site_url('topik/ambil_topik/').$i->id_topik.'/'.'profile'?>">
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
                  <a href="#">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-trash"></i>
                      Hapus
                    </button>
                  </a>
                </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal dimulai -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- Modal Selesai -->
