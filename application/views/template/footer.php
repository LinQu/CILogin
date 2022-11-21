</div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer">
        © 2017 Material Pro Admin by wrappixel.com
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->

      <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
      <!--Wave Effects -->
      <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
      <!--Menu sidebar -->
      <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
      <!--stickey kit -->
      <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <!--Custom JavaScript -->
      <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
      <!-- ============================================================== -->
      <!-- This page plugins -->
      <!-- ============================================================== -->
      <!-- chartist chart -->
      <script src="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
      <!--c3 JavaScript -->
      <script src="<?php echo base_url(); ?>assets/plugins/d3/d3.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/c3-master/c3.min.js"></script>
      <!-- Chart JS -->
      <script src="<?php echo base_url(); ?>assets/js/dashboard1.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

      <script>
        $(document).ready(function() {

          // get Edit Product
          $('.btn-edit').on('click', function() {
            // get data from button edit
            const username = $(this).data('username');
            const password = $(this).data('password');
            const nama = $(this).data('nama');
            const role = $(this).data('role');
            const email = $(this).data('email');
            const telepon = $(this).data('telepon');

            // Set data to Form Edit
            $('.username').val(username);
            $('.password').val(password);
            $('.nama').val(nama);
            $('.role').val(role);
            $('.email').val(email);
            $('.telepon').val(telepon);

            // Call Modal Edit
            $('#editModal').modal('show');
          });

          // get Delete Product
          $('.btn-delete').on('click', function() {
            // get data from button delete
            const username = $(this).data('username');
            // Set data to Form Edit
            $('.username').val(username);
            // Call Modal Edit
            $('#deleteModal').modal('show');
          });
        });

        $(function() {
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
      </body>

      </html>