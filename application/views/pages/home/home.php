<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $title ?></title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <div class="login-logo">
         <img width="200" src="<?= base_url('assets/img/logo.jpeg') ?>" alt="Gambar">
      </div>
      <!-- /.login-logo -->
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Masukkan NIK Anda</p>

            <form action="<?= base_url('home/saverekappasien') ?>" method="post">
               <div class="input-group mb-3">
                  <input type="number" name="nik" onblur="validasinik()" value="<?= isset($_COOKIE['nik']) ? $_COOKIE['nik'] : '' ?>" id="nik" class="form-control" placeholder="Nik">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <!-- <span class="fas fa-envelope"></span> -->
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-8">
                     <div class="checkbox icheck">
                        <label>
                           <input type="checkbox" value="" id="reminderMe" name="reminderMe" <?= (isset($_COOKIE['nik'])) ? "checked" : '' ?>> Remember Me
                        </label>
                     </div>
                  </div>
               </div>
               <div class="input-group" style="margin-top:15px">
                  <Label>Apakah Sudah Makan</Label>
               </div>
               <div class="row" style="margin-left: 1px;">
                  <div>
                     <input type="checkbox" name="statusmakan" value="1">
                     <label for="Ya">
                        Ya
                     </label>
                  </div>
                  <div style="margin-left: 20px;">
                     <input type="checkbox" name="statusmakan" value="0">
                     <label for="Tidak">
                        Tidak
                     </label>
                  </div>
               </div>
               <div class="social-auth-links text-center mb-3">
                  <button type="submit" id="btnlapor" class="btn btn-block btn-primary">Lapor Minum Obat</button>

               </div>
            </form>


            <!-- /.social-auth-links -->
         </div>
         <!-- /.login-card-body -->
      </div>
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
   <!-- AdminLTE App -->
   <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>

   <script>
      function validasinik() {
         var nik = $('#nik').val();
         //console.log(model);
         $.ajax({
            url: "<?php echo base_url("Home/validasinik"); ?>",
            type: "POST",
            data: {
               nik: nik,
            },
            success: function(data) {
               if (data == 1) {

                  alert("NIK sudah terdaftar")
                  document.getElementById("btnlapor").disabled = false;
               } else if (data == 0) {
                  alert("NIK belum terdaftar")
                  document.getElementById("btnlapor").disabled = true;
               }
            }
         });
      }
   </script>
</body>

</html>