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
       Tabel Berita
    
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- CONTENT WEB DITULIS DISINI -->

          <table class="table table-striped table-bordered data">
              <thead>
                  <tr>      
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Tanggal Upload</th>                   
                    <th>Pilihan</th>
                  </tr>
                </thead>

                <tbody>
                   <?php 
                   $no = 0;
                   foreach ($berita as $data){ 
                    $no++;  ?>
                   <td><?php echo $no; ?></td>
                   <td><?php echo $data->judul_berita; ?></td>
                   <td><?php echo $data->isi_berita; ?></td>
                   <td><?php echo $data->tgl_upload; ?></td>
                   <td></td>
                   <?php } ?>
                </tbody>
          </table>



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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
