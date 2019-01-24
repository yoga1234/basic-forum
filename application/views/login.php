<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yogasmara">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/top-icon.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-style.css'); ?>">

  </head>
  <body>
    <section id="login-wrapper">
      <div class="login-container">
        <div class="header">
          Login Pengguna
        </div>
        <form class="" action="<?php echo site_url('login/aksi_login') ?>" method="post">
          <input type="text" name="username" placeholder="Masukan Username Anda" autocomplete="off" required>
          <input type="password" name="password" placeholder="Masukan Password Anda" autocomplete="off" required>
          <button type="submit" name="button">Masuk</button>
        </form>
        <div class="informasi-login">
          <a href="#" class="lupa-password">Lupa Password ?</a>
          <div class="daftar-baru">
            <span class="header-text">Belum punya akun?</span>
            <a href="<?php echo site_url('login/signup');?>" class="daftar-user">Daftar</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
