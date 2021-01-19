<div class="container">
  <div class="row">
    <div class="col-md col-md-offset-2">
      <?= $this->session->flashdata('message'); ?>
      <hr />
      <form action="<?php echo base_url() . 'admin/post_berita/simpan_post' ?>" method="post" enctype="multipart/form-data">
        <input type="text" autocomplete="off" name="judul" class="form-control" placeholder="Judul berita" required />
        <br />
        <div class="row">
          <div class="col-sm-8">
            <textarea id="ckeditor" name="berita" class="form-control" required></textarea>
          </div>
          <div class="col-sm-4">
            <label for="Gambar">Masukkan Gambar</label>
            <input type="file" name="filefoto" required><br> <br>
            <button class="btn btn-primary btn-md" type="submit">Post Berita</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>