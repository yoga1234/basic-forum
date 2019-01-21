<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Yogasmara">
  <title>Tambah Topik | Basic Forum</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/top-icon.png'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/home-style.css'); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
  <div class="container bg-light" style="margin-top: 40px">
    <div class="row">
      <div class="col-md-12">
        <h3 style="margin-top: 40px">Masukan Topik Baru</h3>
        <form class="" action="<?php echo site_url('tambah_topik/add_topik'); ?>" method="post" style="margin-top: 40px" role="form">
            <div class="form-group">
              <label for="judulTopik">Judul</label>
              <input type="text" class="form-control" name="judul_topik" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="kontenTopik">Konten</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="konten_topik"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2" name="submit"><i class="fas fa-plus"></i> Tambah Topik</button>
              <a href="<?php echo site_url('home'); ?>">
                <button type="button" class="btn btn-outline-secondary mb-2"><i class="fas fa-chevron-left"></i> Kembali</button>
              </a>
            </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable();
} );
</script>
</html>
