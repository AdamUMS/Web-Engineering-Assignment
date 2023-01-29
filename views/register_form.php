<!-- Template CSS -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style_stisla.css">
  

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register')?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Name</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama', '<div class="text-small text-danger">','</div>')
                      ?>

                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                      <?php echo form_error('username', '<div class="text-small text-danger">','</div>')
                      ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Address</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>')
                      ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">--Choose Gender--</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                      <?php echo form_error('gender', '<div class="text-small text-danger">','</div>')
                      ?>
                    </div>

                    <div class="form-group col-6">
                      <label for="no_telepon" class="d-block">Phone Number</label>
                      <input id="no_telepon" type="text" class="form-control" name="no_telepon">
                      <?php echo form_error('no_telepon', '<div class="text-small text-danger">','</div>')
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Matric Number</label>
                      <input id="no_student" type="text" class="form-control" name="no_student">
                      <?php echo form_error('no_student', '<div class="text-small text-danger">','</div>')
                      ?>
                    </div>

                    <div class="form-group col-6">
                      <label>Password</label>
                      <input id="password" type="password" class="form-control" name="password">
                      <?php echo form_error('password', '<div class="text-small text-danger">','</div>')
                      ?>
                    </div>
                  </div>
                
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>