<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->

<!-- Content Header (Page header) -->

<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- if dosen  -->
    <?php if ($this->session->userdata('role') == 'Admin') { ?>
      <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Tambah</button><br><br>
    <?php } ?>


    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Account List</h3>
      </div>

      <!-- if flash succes -->
      <?php if ($this->session->flashdata('flashsucces')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Account <strong>Successfully</strong> <?= $this->session->flashdata('flashsucces'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('flashupdate')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Account <strong>Successfully</strong> <?= $this->session->flashdata('flashupdate'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('flashalert')) : ?>
        <div class="alert">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Account <strong>Failed</strong> <?php echo $this->session->flashdata('flashalert'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      <?php endif; ?>
      <br />
      <!-- pop up danger alert -->

      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" width="100%" class=" table table-bordered table-striped">
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Full Name</th>
              <th>Role</th>
              <th>Email</th>
              <th>Number Phone</th>
              <?php if ($this->session->userdata('role') == 'Admin') { ?>
                <th>Action</th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($account as $row) {
              $i++;
            ?>
              <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telepon']; ?></td>
                <?php if ($this->session->userdata('role') == 'Admin') { ?>
                  <td>
                    <a href="#" data-username="<?= $row['username']; ?>" data-password="<?= $row['password']; ?>" data-nama="<?= $row['nama']; ?>" data-role="<?= $row['role']; ?>" data-email="<?= $row['email']; ?>" data-telepon="<?= $row['telepon']; ?>" class="btn btn-edit btn-warning">Edit</a>
                    <a href="#" data-username="<?= $row['username']; ?>" class="btn btn-danger btn-delete ">Delete</a>
                  </td>
                <?php } ?>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- modall add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body">
            <!-- /.card-header -->
            <!-- if password not same -->
            <div class="alert" style="display:none" id="alert" role="alert">
            </div>

            <div class="card-body mx-5 mb-5">
              <!-- form myForm -->

              <form action="<?php echo site_url('Account/add') ?>" id="myForm" class="was-validate" role="form" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" onfocusout="validateForm();" name="username" required>
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" onfocusout="validateForm();" name="nama" required>
                  </div>

                  <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="text" class="form-control" id="password" onfocusout="validateForm();" name="password" required>
                  </div>
                  <div class="form-group">

                    <label for="pass">Password Confirmation</label>
                    <input type="text" class="form-control passwordval" onfocusout="validateForm();" id="passwordval" name="passwordval" required>
                  </div>
                  <!-- Password must contain at least ONE UPPERCASE LETTER
                  ONE LOWERCASE LETTER, ONE NUMBER, ONE SPECIAL CHARACTER
                  AND MUST BE AT LEAST 8 CHARACTERS LONG -->
                  <!-- display list erorr -->
                  <div class="alert" style="display:none" id="alert2" role="alert">
                  </div>



                  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" id="role" onfocusout="validateForm();" style="width: 100%;" required>
                      <option value="null">-- Select One --</option>
                      <option value="Admin">Admin</option>
                      <option value="Dosen">Dosen</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" onfocusout="emailValidation()" id="emails" name="email" required>
                    <p class="help-block"></p>
                  </div>

                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" onfocusout="validateForm();" name="telepon" required>
                  </div>
                  <div class="modal-footer">
                    <button type="number" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    &nbsp;&nbsp;
                    <button type="submit" id="btn-save" disabled class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /.card -->
    <!-- Modal Delete Product-->
    <form action="<?php echo site_url('Account/delete/') ?>" method="post">
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <h4>Are you sure want to delete this account?</h4>
              <input type="hidden" name="username" class="username" required>


            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Modal Edit Account-->
    <form action="<?php echo site_url('Account/edit') ?>" method="post">
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- /.card-header -->
              <div class="alert" style="display:none" id="alert1" role="alert">
              </div>
              <div class="card-body mx-5 mb-5">
                <div class="box-body">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control username" name="username" required>
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control nama" name="nama" required>
                  </div>


                  <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="text" class="form-control password" id="password1" name="password" required>
                  </div>
                  <!-- if password not same -->

                  <div class="form-group">
                    <label for="pass">Password Confirmation</label>
                    <input type="text" class="form-control passwordval" id="passwordval1" name="passwordval" required>
                  </div>

                  <!-- if password not same -->

                  <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control role" style="width: 100%;" required>
                      <option value="null">-- Select One --</option>
                      <option value="Admin">Admin</option>
                      <option value="Dosen">Dosen</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control email" name="email" required>
                  </div>

                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control telepon" name="telepon" required>
                  </div>
                  <div class="modal-footer">
                    <button type="number" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    &nbsp;&nbsp;
                    <button type="submit" id="btn-update" disabled class="btn btn-primary">Save Changes</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
    <!-- /.card -->


  </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

<!-- page script -->
<script>

</script>