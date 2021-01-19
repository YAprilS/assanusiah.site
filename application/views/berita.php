 <!-- berita --> 
 <section class="berita py-5 bg-light" id="berita">
   <div class="container"> <br> <br>
     <?= $this->session->flashdata('message'); ?>
     <div class="col-sm-4 offset-8">
     <div class="navbar-form navbar-right">
         <?= form_open('berita/search') ?>
         <input type="text" name="keyword" class="form-control mb-1" placeholder="Cari Berita">
         <button type="submit" class="btn btn-primary">Cari</button>
         <?= form_close() ?>
     </div>
     </div>

     <div class="row mt-5">
       <?php
        function limit_words($string, $word_limit)
        {
          $words = explode(" ", $string);
          return implode(" ", array_splice($words, 0, $word_limit));
        }
        foreach ($berita->result_array() as $i) :
          $id = $i['berita_id'];
          $judul = $i['berita_judul'];
          $image = $i['berita_image'];
          $isi = $i['berita_isi'];
          $tgl = $i['berita_tanggal'];
        ?>
         <div class="col-sm-8 card border-info mb-5">
           <div class="mt-2 mb-2"><img src="<?= base_url() . 'assets/berita/images/' . $image; ?>" class="img-thumbnail" style="width: 100%;"></div>
           <div class="card-body card-header text-info"> <br>
             <h5 class="card-title" name="judul"><?= $judul; ?></h5>
             <p class="card-text" name="isi"><?= limit_words($isi, 15); ?></p>
             <p class="text-right"><small class="text-muted text-right"><?= $tgl; ?></small></p>
             <a href="<?= base_url() . 'berita/view/' . $id; ?>" class="btn btn-primary btn-sm float-right">selengkapnya</a>

           </div> <br> <br>
         </div>
       <?php endforeach; ?>
     </div>
     <nav><?= $page; ?></nav>
   </div>
 </section>
 <!-- berita -->