<!DOCTYPE html>
<html>
<?php
$page = "trade_list";
include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Stamping Quarter List</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> Stamping Quarter List</h3>
              <div class="card-tools">
                <a href="<?php echo base_url(); ?>Admin/add_trade" class="btn btn-sm btn-block btn-primary">Add Trade Business</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Trade Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i=0;
                  foreach ($trade_list as $list) {
                  $i++;
                ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->trade_name; ?></td>
                    <td>
                      <a href="edit_trade/<?php echo $list->trade_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a class="ml-2" href="delete_trade/<?php echo $list->trade_id; ?>" onclick="return confirm('Delete Confirm');"> <i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                <?php  }  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('script.php') ?>
</body>
</html>
