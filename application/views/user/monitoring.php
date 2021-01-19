<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <?= $this->session->flashdata('message'); ?>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Pelanggaran</th>
                        <th>Prestasi</th>
                        <th>Hafalan Alqur'an</th>
                        <th>SPP</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($monitoring->result() as $d) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->pelanggaran; ?></td>
                            <td><?= $d->prestasi; ?></td>
                            <td><?= $d->alquran; ?></td>
                            <td><?= $d->spp; ?></td>
                            <td><?= $d->tgl; ?></td>
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