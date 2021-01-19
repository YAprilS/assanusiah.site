<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>admin/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>admin/js/demo/datatables-demo.js"></script>

<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/jquery-ui.js"></script>

<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>jquery-ui-1.12.1/print/vfs_fonts.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#tablesave').DataTable({
      dom: 'Bfrtip',
      buttons: ['csv', 'excel', 'pdf', 'print']
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#kode').on('input', function() {

      var kode = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('admin/klasifikasi/get_nisn') ?>",
        dataType: "JSON",
        data: {
          kode: kode
        },
        cache: false,
        success: function(data) {
          $.each(data, function(kode, nama_lengkap, email) {
            $('[name="nama"]').val(data.nama_lengkap);
            $('[name="email"]').val(data.email);

          });

        }
      });
      return false;
    });

  });
</script>

</body>

</html>