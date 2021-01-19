<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('message'); ?>
  <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah">
    Tambah Pengumuman
  </button>

  <!-- modal tambahdata -->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" action="<?= base_url('admin/pengumuman/simpan_file'); ?>" id="submit" enctype="multipart/form-data">

            <div class="form-group">
              <textarea name="xdeskripsi" id="xdeskripsi" cols="30" rows="10" value="<?= set_value('xdeskripsi'); ?>" placeholder="Deskripsi" class="form-control" required></textarea>
              <?= form_error('xdeskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="file" name="filenama" required> <br>
              <p style="color: red;">NB: file harus bertype pdf|doc|docx|ppt|pptx|zip|xls|xlsx|csv.</p>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Tambah</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

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
                  <th>Nama File</th>
                  <th>Deskripsi</th>
                  <th>Tanggal</th>
                  <th class="text-center">aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data->result() as $d) : ?>
                  <tr>
                    <td class="small"><?= $no++; ?></td>
                    <td class="small"><?= $d->filenama; ?></td>
                    <td class="small"><?= $d->desk; ?></td>
                    <th class="small"><?= $d->tgl; ?></th>
                    <td class="text-center">
                      <a href="<?= base_url() . 'admin/pengumuman/download/' . $d->id; ?>">
                        <span class=" fa fa-download"></span></a> |
                      <a data-toggle="modal" data-target="#modal_hapus<?php echo $d->id; ?>">
                        <span class="fa fa-trash"></span></a>
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

<?php foreach ($data->result() as $d) : ?>
  <div class="modal fade" id="modal_hapus<?= $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/pengumuman/delete' ?>">
          <div class="modal-body">
            <p>Anda yakin mau menghapus <b><?= $d->filenama; ?></b></p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" value="<?= $d->id; ?>">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>