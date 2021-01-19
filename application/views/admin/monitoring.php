<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Tambah Data
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>email</th>
                        <th>nama</th>
                        <th>Pelanggaran</th>
                        <th>Prestasi</th>
                        <th>Hafalan Alqur'an</th>
                        <th>SPP</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data->result() as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->email; ?></td>
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->pelanggaran; ?></td>
                            <td><?= $d->prestasi; ?></td>
                            <td><?= $d->alquran; ?></td>
                            <td><?= $d->spp; ?></td>
                            <td><?= $d->tgl; ?></td>
                            <td style="text-align:right;">
                                <a data-toggle="modal" data-target="#modal_hapus<?php echo $d->id; ?>"> <span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <!-- isi modal -->
                <form action="<?= base_url('admin/monitoring/tambahdata') ?>" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="kode" name="kode" autocomplete="off" value="<?= set_value('kode'); ?>">
                        <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" readonly>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pelanggaran">Pelanggaran</label>
                        <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" autocomplete="off" value="<?= set_value('pelanggaran'); ?>">
                        <?= form_error('pelanggaran', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <input type="text" class="form-control" id="prestasi" name="prestasi" autocomplete="off" value="<?= set_value('prestasi'); ?>">
                        <?= form_error('prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="hafalan">Hafalan Al-Qur'an</label>
                        <select class="form-control form-control-sm" id="hafalan" name="hafalan" value="<?= set_value('hafalan'); ?>">
                            <option value="">--Pilih Hafalan Santri--</option>
                            <option>Juz 1</option>
                            <option>Juz 2</option>
                            <option>Juz 3</option>
                            <option>Juz 4</option>
                            <option>Juz 5</option>
                            <option>Juz 6</option>
                            <option>Juz 7</option>
                            <option>Juz 8</option>
                            <option>Juz 9</option>
                            <option>Juz 10</option>
                            <option>Juz 11</option>
                            <option>Juz 12</option>
                            <option>Juz 13</option>
                            <option>Juz 14</option>
                            <option>Juz 15</option>
                            <option>Juz 16</option>
                            <option>Juz 17</option>
                            <option>Juz 18</option>
                            <option>Juz 19</option>
                            <option>Juz 20</option>
                            <option>Juz 21</option>
                            <option>Juz 22</option>
                            <option>Juz 23</option>
                            <option>Juz 24</option>
                            <option>Juz 25</option>
                            <option>Juz 26</option>
                            <option>Juz 27</option>
                            <option>Juz 28</option>
                            <option>Juz 29</option>
                            <option>Juz 30</option>
                        </select>
                        <?= form_error('hafalan', '<div class="text-danger small" ml-3>', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="spp">SPP</label>
                        <input type="text" class="form-control" id="spp" name="spp" autocomplete="off" value="<?= set_value('spp'); ?>">
                        <?= form_error('spp', '<small class="text-danger pl-3">', '</small>'); ?>
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

<?php foreach ($data->result() as $d) : ?>
    <div class="modal fade" id="modal_hapus<?= $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/monitoring/deletemonitoring' ?>">
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