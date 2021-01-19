<div id="layoutSidenav">
  <div id="layoutSidenav_content">
    <main class="mt-5 pt-3">
      <div class="container-fluid">



        <!-- DataTales Example -->
        <div class="container"> <br>
          <h1 class="mt-4">Pengumuman</h1>
          <div class="row" style="min-height: 450px;">
            <div class="col-sm">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>file</th>
                        <th>deskripsi</th>
                        <th>tanggal</th>
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
                          <td class="text-center"><a href="<?= base_url() . 'pengumuman/download/' . $d->id; ?>" class="btn btn-info btn-sm">Download</a></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

    </main>
  </div>
</div>