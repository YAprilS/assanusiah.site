<!-- form -->
<section class="kontak py-5 bg-light" id="kontak">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <br>
        <?= $this->session->flashdata('message'); ?>
        <br>
        <h2 class="py-3 text-center">Pendaftaran</h2>
        <br>

        <div class="row">
          <div class="col-sm-12">
            <div class="card w-150">
              <h5 class="card-header">1. Membuka Website</h5>
              <div class="card-body">
                <p class="card-text" style="text-indent: 50px;">Mengakses website pondok pesantren Assanusiah Kabupaten Cirebon lalu memilih menu pendaftaran.</p>
              </div>
            </div>
          </div>
        </div> <br>
        <div class="row">
          <div class="col-sm-12">
            <div class="card w-150">
              <h5 class="card-header">2. Pengisian Data Calon Santri</h5>
              <div class="card-body">
                <p class="card-text" style="text-indent: 50px;"> Setelah mengakses website dan memilih menu pendaftaran, calon santri harus mengisi formulir pendafataran.
                  <a href="" data-toggle="modal" data-target="#exampleModal">klik disini</a></p>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-sm-12">
            <div class="card w-150">
              <h5 class="card-header">3. Mengikuti Tes</h5>
              <div class="card-body">
                <p class="card-text" style="text-indent: 50px; text-align: justify;">Setelah melakukan pengisian formulir pendaftaran, calon santri mengikuti tes berdasarkan jadwal yang tertera pada kartu ujian yang telah di download.</p>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-12">
            <div class="card w-150">
              <h5 class="card-header">4. Pengumuman Hasil Seleksi</h5>
              <div class="card-body">
                <p class="card-text" style="text-indent: 50px; text-align: justify;">Hasil Seleksi akan diumumkan melalui halaman resmi website pondok pesantren assanusiah pada menu <strong>pengumuman</strong>.</p>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-sm-12">
            <div class="card w-150">
              <h5 class="card-header">5. Pengumpulan Berkas</h5>
              <div class="card-body">
                <p class="card-text" style="text-indent: 50px; text-align: justify;">Setelah resmi diterima, calon santri diharuskan mengirim dokumen-dokumen (KK & Foto 3x4 2 lembar) dengan cara pengiriman POS atau dikirim via email.</p>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  </div>
</section>
<!-- form -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="text-center">Informasi Pribadi Santri</span>
        <br>
        <form method="POST" action="<?= base_url(); ?>pendaftaran/tambahdata" enctype="multipart/form-data">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" placeholder="nisn" id="nisn" name="nisn" value="<?= set_value('nisn'); ?>" autocomplete="off" maxlength="10">
                <?= form_error('nisn', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="nama lengkap" id="nama_lengkap" name="nama_lengkap" autocomplete="off" value="<?= set_value('nama_lengkap'); ?>">
                <?= form_error('nama_lengkap', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="email" id="email" name="email" autocomplete="off" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control" placeholder="tempat lahir" id="tempat_lahir" name="tempat_lahir" autocomplete="off" value="<?= set_value('tempat_lahir'); ?>">
                <?= form_error('tempat_lahir', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="tanggal lahir" id="tgl_lahir" name="tgl_lahir" autocomplete="off" value="<?= set_value('tgl_lahir'); ?>">
                <?= form_error('tgl_lahir', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control form-control-sm" id="jk" name="jk" value="<?= set_value('jk'); ?>">
                  <option value="">--Pilih Jenis Kelamin--</option>
                  <option>Laki-Laki</option>
                  <option>Perempuan</option>
                </select>
                <?= form_error('jk', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="riwayat_sakit">Riwayat Sakit (optional)</label>
                <input type="text" class="form-control" placeholder="riwayat sakit" id="riwayat_sakit" name="riwayat_sakit" autocomplete="off" value="<?= set_value('riwayat_sakit'); ?>">
              </div>
            </div>
            <div class="col-sm-6">
              <div class=" form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select class="form-control form-control-sm" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?= set_value('pendidikan_terakhir'); ?>">
                  <option value="">--Pilih Pendidikan Terakhir--</option>
                  <option>SD/Sederajat</option>
                  <option>SMP/Sederajat</option>
                  <option>SMA/Sederajat</option>
                </select>
                <?= form_error('pendidikan_terakhir', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <br>
          <span class=" py-3">Informasi Orang Tua Santri</span>
          <br> <br>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control" placeholder="nama ayah" id="nama_ayah" name="nama_ayah" autocomplete="off" value="<?= set_value('nama_ayah'); ?>">
                <?= form_error('nama_ayah', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pendidikan_ayah">Pendidikan Ayah</label>
                <select class="form-control form-control-sm" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= set_value('pendidikan_ayah'); ?>">
                  <option value="">--Pilih Pendidikan Terakhir Ayah--</option>
                  <option>SD/Sederajat</option>
                  <option>SMP/Sederajat</option>
                  <option>SMA/Sederajat</option>
                  <option>D1</option>
                  <option>D2</option>
                  <option>D3</option>
                  <option>D4</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>S3</option>
                </select>
                <?= form_error('pendidikan_ayah', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <input type="text" class="form-control" placeholder="pekerjaan ayah" id="pekerjaan_ayah" name="pekerjaan_ayah" autocomplete="off" value="<?= set_value('pekerjaan_ayah'); ?>">
                <?= form_error('pekerjaan_ayah', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" class="form-control" placeholder="nama ibu" id="nama_ibu" name="nama_ibu" autocomplete="off" value="<?= set_value('nama_ibu'); ?>">
                <?= form_error('nama_ibu', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pendidikan_ibu">Pendidikan Ibu</label>
                <select class="form-control form-control-sm" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= set_value('pendidikan_ibu'); ?>">
                  <option value="">--Pilih Pendidikan Terakhir Ibu--</option>
                  <option>SD/Sederajat</option>
                  <option>SMP/Sederajat</option>
                  <option>SMA/Sederajat</option>
                  <option>D1</option>
                  <option>D2</option>
                  <option>D3</option>
                  <option>D4</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>S3</option>
                </select>
                <?= form_error('pendidikan_ibu', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                <input type="text" class="form-control" placeholder="pekerjaan ibu" id="pekerjaan_ibu" name="pekerjaan_ibu" autocomplete="off" value="<?= set_value('pekerjaan_ibu'); ?>">
                <?= form_error('pekerjaan_ibu', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto">foto 3x4</label>
                <input type="file" class="form-control" id="foto" name="foto" autocomplete="off" value="<?= set_value('foto'); ?>" required>
                <?= form_error('foto', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="alamat_ortu">Alamat Orang Tua</label>
                <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu" autocomplete="off" value="<?= set_value('alamat_ortu'); ?>" placeholder="alamat orang tua" required>
                <?= form_error('alamat_ortu', '<div class="text-danger small" ml-3>', '</div>'); ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>