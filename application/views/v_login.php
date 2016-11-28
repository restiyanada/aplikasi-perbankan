<!DOCTYPE html>
<html>
    <head>
        <title> Halaman Login </title>
        <link rel="stylesheet" href="<?php echo base_url(). "assets/bootstrap/css/bootstrap.css" ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css" ?>" type="text/css" />
        <style>
        .loginbox{
        margin: 180px auto;
        width: 450px;
        position: relative;
        border-radius: 15px;
        background: #ffffff
        }
        body{
          background-color: rgb(209, 209, 209);
        }
        </style>
        </head>
        <body>
            <!-- Horizontal Form -->
          <div class="box box-info loginbox">
            <div class="box-header with-border">
              <h3 class="box-title">Halaman Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            if(isset($_post['masuk'])){
$a = $this->input->post('adm');
$p = $this->input->post('pwd');
            }
            ?>

            <form class="form-horizontal" action="<?php echo base_url('login/masuk'); ?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" from="username">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" required placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="password">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" name="reset" class="btn btn-default">cancel</button>
                <button type="submit" name="masuk" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
               <?php
             if($this->session->flashdata('pesan')<> ''){
               ?>
              <div class="alert alert-dismissible alert-danger">
              <?php echo $this->session->flashdata('pesan');?>
              </div>
              <?php
             }
             ?>
            </form>
             </div>
            </body>
    </html>