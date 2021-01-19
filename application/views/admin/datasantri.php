<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <?= $this->session->flashdata('message'); ?>



  <div class="row">
    <div class="col-sm">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <button style="float: right;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#delall">
            Hapus Semua Data
          </button>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="tablesave" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nisn</th>
                  <th>Foto</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data->result() as $d) : ?>
                  <tr>
                    <td class="small"><?= $no++; ?></td>
                    <td class="small">
                      <a href="" data-toggle="modal" data-target="#modaldetail<?php echo $d->id; ?>">
                        <?= $d->nama_lengkap; ?></a>
                    </td>
                    <td class="small"><?= $d->nisn; ?></td>
                    <td class="small text-center"><img src="<?= base_url() . 'assets/img/foto/' . $d->foto; ?>" class="img thumbnail" style="width:90px;"></td>
                    <td style="text-align:right;" class="text-center">
                      <a data-toggle="modal" data-target="#modal_hapus<?php echo $d->id; ?>"> <span class="fas fa-trash"></span></a>
                      <a data-toggle="modal" data-target="#modaldetail<?php echo $d->id; ?>"> <span class="fa fa-info-circle"></span></a>
                      <a href="<?= base_url('admin/data_santri/cetak/' . $d->id) ?>" target="_blank" class=""><span class="fa fa-download"></a>
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

<!-- Modal -->
<?php foreach ($data->result() as $d) : ?>
  <div class="modal fade" id="delall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/data_santri/delall' ?>">
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

<!-- modal -->
<?php foreach ($data->result() as $d) : ?>
  <div class="modal fade" id="modal_hapus<?php echo $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/data_santri/deletedatasantri' ?>">
          <div class="modal-body">
            <p>Anda yakin mau menghapus <b><?php echo $d->nama_lengkap; ?></b></p>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" value="<?php echo $d->id; ?>">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>

<!-- modal -->
<?php foreach ($data->result() as $d) : ?>
  <div class="modal fade" id="modaldetail<?php echo $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <strong>Detail</strong>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
        <form class="form-horizontal" method="post" action="">
          <div class="modal-body">

            <div class="row">
              <div class="col-sm-4">
                <label for=""><strong>NISN</strong> : <?= $d->nisn; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Nama Lengkap</strong> : <?= $d->nama_lengkap; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Email</strong> : <?= $d->email; ?></label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <label for=""><strong>Tempat Lahir</strong> : <?= $d->tempat_lahir; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Tanggal Lahir</strong> : <?= $d->tgl_lahir; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Jenis Kelamin</strong> : <?= $d->jk; ?></label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <label for=""><strong>Riwayat Sakit</strong> : <?= $d->riwayat_sakit; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Pendidikan Terakhir</strong> : <?= $d->pendidikan_terakhir; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Nama Ayah</strong> : <?= $d->nama_ayah; ?></label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <label for=""><strong>Pendidikan Ayah</strong> : <?= $d->pendidikan_ayah; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Pekerjaan Ayah</strong> : <?= $d->pekerjaan_ayah; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Nama Ibu</strong> : <?= $d->nama_ibu; ?></label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <label for=""><strong>Pendidikan Ibu</strong> : <?= $d->pendidikan_ayah; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Pekerjaan Ibu</strong> : <?= $d->pekerjaan_ayah; ?></label>
              </div>
              <div class="col-sm-4">
                <label for=""><strong>Alamat Orang Tua</strong> : <?= $d->alamat_ortu; ?></label>
              </div>
            </div>

          </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" value="<?php echo $d->id; ?>">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
      </form>
    </div>
  </div>
  </div>
<?php endforeach ?>