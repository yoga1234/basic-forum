<?php
  if($this->session->userdata("nama") == ""){
    redirect(site_url('login'));
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Yogasmara">
  <title>Home | Basic Forum</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/top-icon.png'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/home-style.css'); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
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
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($content as $i){
                ?>
                <tr>
                  <td><?php echo $i->judul_topik?></td>
                  <td><?php echo $i->pengunggah?></td>
                  <td><button class="btn btn-primary mx-auto d-block"><i class="fa fa-search"></i> Lihat</button></td>
                </tr>
                <?php
              }
            ?>
          </tbody>
        </div>
      </div>
    </section>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "columns": [
        { "width": "25%" },
        null,
        null
      ]
    });
  } );
  </script>
  </html>
