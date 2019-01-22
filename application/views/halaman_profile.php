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
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
              </tr>
            </tbody>
          </table>
          </div>
      </div>
    </div>
