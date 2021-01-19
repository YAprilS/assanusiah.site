<!-- Begin Page Content -->
<div class="container-fluid">


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
                  <th>desk</th>
                  <th>file</th>
                  <th>tanggal</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($data->result() as $d) : ?>
                  <tr>
                    <td class="small"><?= $no++; ?></td>
                    <td class="small"><?= $d->desk; ?></td>
                    <td class="small"><?= $d->filenama; ?></td>
                    <th class="small"><?= $d->tgl; ?></th>
                    <th class="text-center"><a href="<?= base_url() . 'user/pengumuman/download/' . $d->id; ?>" class="btn btn-info btn-sm">Download</a></th>
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