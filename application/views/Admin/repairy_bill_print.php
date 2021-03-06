<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Repairy Bill</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <?php
    foreach ($repairy_bill_data as $repairy_bill_data) {
      $repairy_id = $repairy_bill_data->repairy_id;
    }
    ?>
    <div class="row">
  <p style="text-align:center; font-size:18px; margin-bottom:20px; ">  <b> <span style="border: 1px solid #000; padding: 10px;">Repair Bill</span> </b>  </p>
</div>
    <table class="table table-bordered mb-0 invoice-table"  width="100%">
<style media="print">
table{
  border-collapse: collapse;
}
.invoice-table td{
  Width:33% !important;
    border: 1px solid #555!important;
}
.invoice-table{
  margin-bottom:0px;
  border: 1px solid #555!important;
}
.invoice-table p{
  line-height: 15px;
}
.mx-auto{
  margin-left: auto;
  margin-right: auto;
}
</style>

<style media="screen">
table{
  border-collapse: collapse;
}
.invoice-table td{
  /* Width:33% !important; */
    border: 1px solid #555!important;
}
.invoice-table{
  margin-bottom:0px;
  border: 1px solid #555!important;
}
.invoice-table p{
  line-height: 15px;
}
.mx-auto{
  margin-left: auto;
  margin-right: auto;
}
</style>

<tr>
  <td colspan="3" width="80%" style="border-right:0px!important; border-left:0px!important;">
    <div style="float:left;">
      <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt="">
    </div>
    <div style="">
      <h3 style="font-size:18px; text-align:center; margin:5px; " ><?php echo $company_name; ?> </h3>
      <p   style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">
        <?php echo $company_address;
        if($company_city != ''){ echo ', '.$company_city; }
        if($company_district != ''){ echo ', '.$company_district; }
        if($company_state != ''){ echo ', '.$company_state; }
        ?>
      </p>
      <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; " >Mob No. <?php if($company_mob1 != ''){ echo $company_mob1; } if($company_mob2 != ''){ echo ', '.$company_mob2; } ?></p>
      <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:left;"> </p> -->
      <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center; ">Email: <?php if($company_email != ''){ echo $company_email; } ?> Website: <?php if($company_website != ''){ echo $company_website; } ?></p>
    </div>
    <!-- <p  style="font-size:14px; margin-bottom:3px; margin-top:3px; text-align:center;">Website: www.universaldigital.net</p>  -->
   </td>
</tr>
  <tr>
    <td style="border-right:0px!important; padding-left: 20px; padding-top:5px;" >
      <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><strong>Party Name and Address</strong></p>
      <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"><?php echo $repairy_bill_data->party_firm; ?></p>
      <p style="font-size:16px; margin-bottom:5px; margin-top:5px; line-height:22px;">
        <?php echo $repairy_bill_data->party_address.' '; ?>
        <?php echo $repairy_bill_data->party_area.' '; ?> <br>
      Taluka :  <?php echo $repairy_bill_data->party_taluka.' '; ?><br>
      Dist :   <?php echo $repairy_bill_data->party_district.' '; ?>
       </p>
      <!-- <p style="font-size:16px; margin-bottom:5px; margin-top:5px;">Sate : <?php echo $repairy_bill_data->party_state.' '; ?></p> -->
      <p style="font-size:16px; margin-bottom:5px; margin-top:5px;"> Contact No. <?php echo $repairy_bill_data->party_mob1.' '; ?></p>
      </td>
    <td style="border-left:0px!important; border-right:0px!important;">
    </td>
    <td style="padding:0px!important;">
      <p style="font-size:14px; margin-bottom:3px; margin-top:3px; padding-left:10px;"><b>No.  <?php echo $repairy_bill_data->repairy_no; ?></b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
      <p style="font-size:14px; margin-bottom:3px; margin-top:3px;  padding-left:10px;"> <b>Date : </b>&nbsp;  <strong><?php echo $repairy_bill_data->repairy_date; ?></strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
    </td>
  </tr>
</table>

<div class="row">
<div class="col-12 table-responsive">
<table class="table table-botttom"  width="100%">
  <style media="print">
  .table-bottom {
  border-collapse: collapse!important;
    Width:100%!important;
  }

  .table-bottom, tr, td, th{

  border: 1px solid #000;

  margin-left: auto;
  margin-right: auto;
  }
  </style>
  <style media="screen">
  .table-bottom {
  border-collapse: collapse!important;
    Width:100%!important;
  }

  .table-bottom, tr, td, th{

  border: 1px solid #000;
  font-size: 14px;
  margin-left: auto;
  margin-right: auto;
  }
  </style>
  <thead>
    <tr>
      <th> <p >S.N</p> </th>
      <th width="20%" > <p >Make</p> </th>
      <th width="20%"> <p >Model No.</p> </th>
      <th> <p >M/C Sr No.</p> </th>
      <th> <p >Capacity</p></th>
      <th> <p >Accuracy</p> </th>
      <th> <p >Class</p> </th>
      <th> <p >Material Used</p> </th>
      <th> <p >Amount</p> </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($repairy_bill_trans_data as $trans_data) {
      $i++;
    ?>
    <tr>
      <td style="text-align:center;"> <p style="font-size:10px; "><?php echo $i; ?></p> </td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->make_name; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->product_model_no; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->machine_serial_no; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->capacity_name; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->accuracy_name; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->class_name; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->repairy_details; ?></p></td>
      <td style="text-align:center;"> <p style="font-size:10px;"><?php echo $trans_data->repairy_trans_amount; ?></p></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="5"></td>
        <td colspan="2" style="border-right:0px; padding-left:10px;"><p style="font-size:14px; margin:5px;">Basic Amount : </p> </td>
        <td colspan="2" style="border-left:0px;"><p style="font-size:14px; margin:5px;"> <b>&#8377; <?php echo number_format((float)$repairy_bill_data->repairy_basic_charge, 2, '.', ''); ?></b> </p></td>
    </tr>
    <tr>
      <td colspan="5"></td>
        <td colspan="2" style="border-right:0px; padding-left:10px;"><p style="font-size:14px; margin:5px;">Service Charge : </p> </td>
        <td colspan="2" style="border-left:0px;"><p style="font-size:14px; margin:5px;"> <b>&#8377; <?php echo number_format((float)$repairy_bill_data->repairy_min_charge, 2, '.', ''); ?></b> </p></td>
    </tr>

    <tr>
      <td colspan="5"> <p style="margin:5px;">Bill Amount In Words : <b>Rupees <?php echo $this->numbertowords->convert_number($repairy_bill_data->repairy_total); ?> Only</b> </p> </td>
      <td colspan="2"><p style="font-size:14px; padding-left:10px; margin:5px;">Grand Total : </p> </td>
      <td colspan="2"><p style="font-size:14px; padding-left:10px; margin:5px;"> <b>&#8377; <?php echo number_format((float)$repairy_bill_data->repairy_total, 2, '.', ''); ?></b> </p></td>
    </tr>

    <tr style="border-bottom:0px!important;">
      <td colspan="9" style="border-bottom:0px!important; border-left:0px;">
        <p>Engineer: <?php echo $repairy_bill_data->repairy_person; ?></p>
        <p style="float:right; margin:5px;"> <b> For <?php echo $company_name; ?> </b> </p>
      </td>
    </tr>

    <tr style="border-top:0px!important;">
      <td colspan="3" style=" padding-left:10px; border-right:0px!important; border-top:0px!important; padding-bottom: 5px; font-size: 12px;"> <br> Name Of the Service Engin </td>
      <td colspan="3" style=" padding-left:10px; border-left:0px!important; border-right:0px!important; padding-bottom: 5px; border-top:0px!important; font-size: 12px;"> <br> Receiver's Signature</td>
      <td colspan="3" style=" padding-left:10px; border-left:0px!important; border-top:0px!important; padding-bottom: 5px; font-size: 12px;"> <br> Auth. Signatory </td>
    </tr>
  </tbody>
</table>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
  window.addEventListener("load", window.print());

</script>


</body>
</html>
