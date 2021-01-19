<?php
$b = $data->row_array();
?>
<!DOCTYPE html>
<html>

<head>
	<title><?php echo $b['berita_judul']; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css">
</head>

<body>

	

	<div class="container mt-5 pt-5">
		<div class="col-md-10 col-md-offset-2">
			<h2><?= $b['berita_judul']; ?></h2>
			<hr />
			<img src="<?= base_url() . 'assets/berita/images/' . $b['berita_image']; ?>">

				<div class="container">
					<div class="col-sm">
						<div class="mt-3">
							<p style="text-align: justify; text-indent: 50px;"> <?= $b['berita_isi']; ?> </p>
						</div>
					</div>
				</div>
			

		</div>

	</div>
	<!-- Footer -->
       <footer class="mt-5">
         <div class="container text-center">
           <div class="row">
             <div class="col-sm text-dark">
               <p>copyright &copy; <strong><?= date('Y') ?></strong> | by Developer Assanusiah</p>
             </div>
           </div>
       </footer>
       <!-- Footer -->

       <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



       

	<script src="<?php echo base_url() . 'assets/berita//jquery/jquery-2.2.3.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/berita//js/bootstrap.js' ?>"></script>
</body>

</html>