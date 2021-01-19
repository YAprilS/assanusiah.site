<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('message'); ?>




  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <div class="modal-body">
          <!-- isi modal -->
          <form action="<?= base_url('admin/klasifikasi/tambahdata') ?>" method="post">
            <div class="form-group">
              <label for="nisn">Nisn</label>
              <input type="text" class="form-control" id="kode" name="kode" autocomplete="off" required>
              <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" readonly required>
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" autocomplete="off" readonly required>
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nilai1">Nilai Baca Al-Qur'an</label>
              <input type="text" class="form-control" id="nilai1" name="nilai1" autocomplete="off">
              <?= form_error('nilai1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nilai2">Nilai Tulis Al-Qur'an</label>
              <input type="text" class="form-control" id="nilai2" name="nilai2" autocomplete="off">
              <?= form_error('nilai2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="nilai3">Nilai Interview</label>
              <input type="text" class="form-control" id="nilai3" name="nilai3" autocomplete="off">
              <?= form_error('nilai3', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">simpan</button>
            </div>
          </form>
          <!-- isi modal -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php foreach ($hasil->result() as $d) : ?>
  <div class="modal fade" id="ModalHapus<?= $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/klasifikasi/delete' ?>">
          <div class="modal-body">
            <p>Anda yakin mau menghapus <b><?= $d->nama; ?></b></p>
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

<div class="row">
  <div class="col-sm">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delall">
          Hapus Semua Data
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
          Tambah Data
        </button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="tablesave" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>nisn</th>
                <th>Nama</th>
                <th>email</th>
                <th>Nilai Baca Al-Qur'an</th>
                <th>Nilai Tulis Al-Qur'an</th>
                <th>Nilai Interview</th>
                <th>Hasil</th>
                <th>Ket</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($hasil->result_array() as $i) :

                $id = $i['id'];
                $nisn = $i['nisn'];
                $nama = $i['nama'];
                $email = $i['email'];
                $nilai1 = $i['nilai1'];
                $nilai2 = $i['nilai2'];
                $nilai3 = $i['nilai3'];
                $total = $i['total'];
                $ket = $i['ket'];
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $nisn; ?></td>
                  <td><?= $nama; ?></td>
                  <td><?= $email; ?></td>
                  <td><?= $nilai1; ?></td>
                  <td><?= $nilai2; ?></td>
                  <td><?= $nilai3; ?></td>
                  <td><?= $total; ?></td>
                  <td><?= $ket; ?></td>
                  <td style="text-align:right;">
                    <a class="btn" data-toggle="modal" data-target="#ModalHapus<?= $id; ?>"><span class="fa fa-fw fa-trash"></span></a>
                  </td>
                </tr>
              <?php endforeach; ?>
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

<?php foreach ($hasil->result() as $d) : ?>
  <div class="modal fade" id="delall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/klasifikasi/delall' ?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus <b>semua data?</b></p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>


