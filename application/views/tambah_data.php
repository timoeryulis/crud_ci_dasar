<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php $this->load->view('head.php'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('navigation.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Form Tambah Data
    
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

    

        <!-- CONTENT WEB DITULIS DISINI -->

                <div class="col-lg-12">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Form Kirim Berita</header>
                    <div class="panel-body">
                      <form class="bs-example form-horizontal" method="POST" action="proses_tambah_data">
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Judul Berita</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Judul Berita" name="judul_berita">                           
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Berita</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" rows="12" name="isi_berita"></textarea>
                          </div>
                        </div>

                         <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal Upload:</label>
                            <div class="col-lg-10">
                            <div class="input-group date ">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                          </div>
                            <!-- /.input group -->
                          </div>
                        
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Kirim</button>
                          </div>
                        </div>
                         
                      </form>
                    </div>
                  </section>
                </div>



      <!-- CONTENT WEB DITULIS DISINI -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  <?php $this->load->view('sidebar.php'); ?>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript">
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
