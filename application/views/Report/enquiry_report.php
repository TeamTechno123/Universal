<!DOCTYPE html>
<html>
<?php
$page = "enquiry_report";
//include('head.php');
?>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Enquiry Report</h4>
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
              <h3 class="card-title"><i class="fa fa-list"></i> Enquiry Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form class="form-horizontal" autocomplete="off" method="post">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label text-right px-0">From Date</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control from_date" name="from_date" id="date1" data-target="#date1" data-toggle="datetimepicker">
                    <label class="text-red"> <?php echo form_error('from_date'); ?> </label>
                  </div>
                  <label class="col-sm-1 col-form-label text-right px-0">To Date</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control to_date" name="to_date" id="date2" data-target="#date2" data-toggle="datetimepicker">
                    <label class="text-red"> <?php echo form_error('from_date'); ?> </label>
                  </div>
                  <label class="col-sm-1 col-form-label text-right px-0">Party</label>
                  <div class="col-sm-3 select-lg">
                    <select class="form-control select2 form-control-sm" name="party_id">
                      <option selected="selected" value="" >Select Party Name</option>
                      <?php foreach ($party_list as $party_list1) { ?>
                      <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($repairy_party)){ if($party_list1->party_id == $repairy_party){ echo "selected"; } }  ?>><?php echo $party_list1->party_firm; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="button">Search</button>
                </div>
              </form>
              <?php if(isset($enquiry_report)){ ?>
                <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Date</th>
                    <th>Enq. Details</th>
                    <th>Nature of Business</th>
                    <th>Name of Firm</th>
                    <th>Mobile No.</th>
                    <th>Area</th>
                    <th>District</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i=0;
                      foreach ($enquiry_list as $enquiry_list1) {
                      $i++;
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $enquiry_list1->enquiry_date; ?></td>
                      <td><?php echo $enquiry_list1->requirment; ?></td>
                      <td><?php echo $enquiry_list1->party_business; ?></td>
                      <td><?php echo $enquiry_list1->party_firm; ?></td>
                      <td><?php echo $enquiry_list1->party_mob1; ?></td>
                      <td><?php echo $enquiry_list1->party_area; ?></td>
                      <td><?php echo $enquiry_list1->party_district; ?></td>
                    </tr>
                    <?php  }  ?>
                  </tbody>
                </table>
                <br>
                <input type="button" name="export" id="export_excel" onclick="Export()" class="btn btn-primary" value="Export to Excel">
              <?php } ?>
            </div>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php //include('footer.php'); ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php //include('script.php') ?>
<script type="text/javascript">
function Export() {
  $("#example1").table2excel({
    filename: "Enquiry_Report.xls"
  });
}
</script>
</body>
</html>
