<!-- Begin Page Content -->
<div class="container-fluid">
  <?= $this->session->flashdata('message'); ?>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah">
    Tambah Pengguna
  </button>

  <!-- Modal -->
  <?php foreach ($pengguna->result() as $d) : ?>
    <div class="modal fade" id="ModalUpdate<?php echo $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          </div>
          <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/pengguna/updatepass' ?>">
            <div class="modal-body">
              <p>Anda yakin mau pengupdate password <b><?= $d->name; ?></b></p>
              <input type="text" name="pass" value="<?= random_string('alnum', 6); ?>">
            </div>
            <div class=" modal-footer">
              <input type="hidden" name="id" value="<?= $d->id; ?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach ($pengguna->result() as $d) : ?>
    <div class="modal fade" id="modal_hapus<?= $d->id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          </div>
          <form class="form-horizontal" method="post" action="<?= base_url() . '/admin/pengguna/deletepengguna' ?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus <b><?= $d->name; ?></b></p>
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

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="user" method="post" action="<?= base_url('admin/pengguna/registration'); ?>">
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
              <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="Email" class="form-control form-control-user" autocomplete="off" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
              </div>
            </div>
            <div class="form-group">
              <select class="form-control form-control-sm" id="level" name="level" required>
                <option>--Pilih level--</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
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
            <table class="table table-bordered" id="tablesave" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Level</th>
                  <!--<th>tgl dibuat</th>-->
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($pengguna->result() as $d) : ?>
                  <tr>
                    <td class="small"><?= $no++; ?></td>
                    <td class="small"><?= $d->name; ?></td>
                    <td class="small"><?= $d->email; ?></td>
                    <th class="small"><?= $d->password; ?></th>
                    <th class="small"><?= $d->role_id == 1 ? "Admin" : "User" ?></th>
                    <!--<th class="small"><?= $d->date_created; ?></th>-->
                    <td style="text-align:center;">
                      
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
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->