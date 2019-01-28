<section id="content">
  <div class="container bg-light mt-5" style="margin-bottom: 50px; padding-bottom: 30px">
    <div class="tambah-topik">
      <a href="<?php echo site_url('profile'); ?>" class="btn btn-outline-primary">
        <i class="fas fa-chevron-left"></i>
        Kembali
      </a>
    </div>
    <div class="datatable">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Username</th>
            <th style="width: 250px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($user as $i){
              ?>
              <tr>
                <td><?php echo $i->username?></td>
                <td>
                  <?php
                      echo "<button class='btn btn-danger' data-toggle='modal' data-target='#myModal' data-whatever='".site_url('user/hapus_user/').$i->id_user."'>";
                      echo "<i class='fa fa-trash'></i>";
                      echo " Hapus";
                      echo "</button>";
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
