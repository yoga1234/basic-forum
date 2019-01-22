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
