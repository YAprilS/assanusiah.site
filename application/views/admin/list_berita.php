<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('message'); ?>
  <a href="<?= base_url('admin/post_berita'); ?>">
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah">
      Post Berita
    </button>
  </a>

  <?php foreach ($berita->result() as $d) : ?>
    <div class="modal fade" id="modal_hapus<?= $d->berita_id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          </div>
          <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/list_berita/deleteberita' ?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus <b><?= $d->berita_judul; ?></b></p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $d->berita_id; ?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  
  <?php foreach ($berita->result() as $d) : ?>
    <div class="modal fade" id="modaledit<?= $d->berita_id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
              <h1>Edit Berita</h1>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          </div>
            <div class="modal-body">
             <form action="<?php echo base_url() . 'admin/list_berita/editberita' ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="judul" class="form-control" placeholder="Judul berita" value="<?= $d->berita_judul; ?>" required />
            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
            <br />
            <div class="row">
              <div class="col-sm-8">
                <textarea id="ckeditor" name="berita" class="form-control" required><?= $d->berita_isi; ?></textarea>
                <?= form_error('berita', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-sm-4">
                <label for="Gambar">Masukkan Gambar</label>
                <input type="file" name="filefoto" class="form-control" value="<?= base_url() . 'assets/berita/images/' . $d->berita_image; ?>" required />
                <?= form_error('filefoto', '<small class="text-danger pl-3">', '</small>'); ?>
                <br> <br>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $d->berita_id; ?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger" type="submit">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach ?>


  <!-- DataTales Example -->
  <div class="row">
    <div class="col-sm">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Tanggal</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($berita->result() as $d) :
                ?>
                  <tr>
                    <td class="small"><?= $no++; ?></td>
                    <td class="small">
                      <a target="_blank" href="<?= base_url() . 'berita/view/' . $d->berita_id; ?>"><?= $d->berita_judul; ?></a>
                    </td>


                    <th class="small"><img src="<?= base_url() . 'assets/berita/images/' . $d->berita_image; ?>" style="width:90px;"></th>
                    <th class="small"><?= $d->berita_tanggal;  ?></th>
                    <td style="text-align:center;">
                      <!--<a data-toggle="modal" data-target="#modaledit<?= $d->berita_id; ?>"> <span class="fa fa-edit"></span></a>-->
                      <a data-toggle="modal" data-target="#modal_hapus<?= $d->berita_id; ?>"> <span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->