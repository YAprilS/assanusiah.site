<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= base_url('assets/'); ?>home/images/favicon.png">

  <title>Succes</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div class="">
    <div class="">
      <!-- Page Wrapper -->
      <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column lead text-gray-800">

          <!-- Main Content -->
          <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid mt-5">

              <!-- 404 Error Text -->
              <div class="text-center">
                <?= $this->session->flashdata('message'); ?>

                <br><br><br>
                <?php foreach ($data->result() as $d) : ?>
                  <a href="<?= base_url('pendaftaran/download/' . $d->id) ?>" target="_blank" class=" mb-5"><button class="btn btn-success">Download Kartu Peserta</button></a>
                <?php endforeach ?>

                <br><br><br>
                <b>
                  <p class="text-danger">*jika tidak berhasil mendownload kartu peserta silahkan hubungi Admin ke nomor +6285288868878 <br> atau kirim email ke assanusiah4@gmail.com</p>
                </b>
                <a href="<?= base_url('home'); ?>">&larr; Kembali ke Halaman Utama</a>
              </div>

            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
    </div>
  </div>
  <!-- End of Page Wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>