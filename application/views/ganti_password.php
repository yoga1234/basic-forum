<div class="container mt-5">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Ganti Password</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Password Baru</h6>
        <form class="" action="<?php echo site_url('user/change_password') ?>" method="post">
          <div class="form-group">
            <input type="text" name="password-baru" class="form-control" placeholder="Masukan Password Baru" autocomplete="off">
          </div>
          <div class="form-group">
            <button class="btn btn-success" name="submit" type="submit">Ganti Password</button>
            <a href="<?php echo site_url('profile') ?>" class="btn btn-info">
              Kembali
            </a>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
