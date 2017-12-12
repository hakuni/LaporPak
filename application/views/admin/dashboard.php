<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php base_url()?>assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php base_url()?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php base_url()?>assets/admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dashboard Admin</a>
            </div>

                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">

                    <!-- /.panel -->
                    <a href="<?php echo base_url()?>dashboard/add">Create</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar Laporan
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                      <td>Nomor Laporan</td>
                                                      <td>Nomor KTP Pelapor</td>
                                                      <td>Topik Laporan</td>
                                                      <td>Deskripsi Laporan</td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($laporan->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo $key['id_laporan'] ?></td>
                                                            <td><?php echo $key['no_KTP'] ?></td>
                                                            <td><?php echo $key['topik'] ?></td>
                                                            <td><?php echo $key['laporan'] ?></td>
                                                            <td>
                                                              <a href="<?php echo base_url() ?>dashboard/read/<?php echo $key['id_laporan'] ?>">Read</a> |
                                                              <a href="<?php echo base_url() ?>dashboard/update/<?php echo $key['id_laporan'] ?>">Edit</a> |
                                                              <a href="<?php echo base_url() ?>dashboard/delete/<?php echo $key['id_laporan'] ?>">Delete</a>
                                                            </td>
                                                          </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->

                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>


                    <a href="<?php echo base_url()?>dashboard/add2">Create Warga</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar Warga
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                      <td>Nomor KTP</td>
                                                      <td>Nama Warga</td>
                                                      <td>Nomor Rumah </td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($warga->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo $key['no_KTP'] ?></td>
                                                            <td><?php echo $key['nama'] ?></td>
                                                            <td><?php echo $key['nomor_rumah'] ?></td>
                                                            <td>
                                                              <a href="<?php echo base_url() ?>dashboard/update2/<?php echo $key['no_KTP'] ?>">Edit</a> |
                                                              <a href="<?php echo base_url() ?>dashboard/delete2/<?php echo $key['no_KTP'] ?>">Delete</a>
                                                            </td>
                                                          </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->

                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>



                    <a href="<?php echo base_url()?>dashboard/add3">Create Pengumuman</a>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar Pengumuman
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                      <td>Nomor Pengumuman</td>
                                                      <td>Topik Pengumuman</td>
                                                      <td>Deskripsi Pengumuman </td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($infowarga->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo $key['no_pengumuman'] ?></td>
                                                            <td><?php echo $key['topik_pengumuman'] ?></td>
                                                            <td><?php echo $key['deskripsi_pengumuman'] ?></td>
                                                            <td>
                                                              <a href="<?php echo base_url() ?>dashboard/update3/<?php echo $key['no_pengumuman'] ?>">Edit</a> |
                                                              <a href="<?php echo base_url() ?>dashboard/delete3/<?php echo $key['no_pengumuman'] ?>">Delete</a>
                                                            </td>
                                                          </tr>
                                                  <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->

                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                Actions
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div >
                                    <div id="morris-area-chart"></div>
                                </div>
                    <!-- /.panel -->


                </div>
                <style>
                 #chart{
                   z-index:-10;}
                </style>
                 <div id="chart">
                </div>
                <script src="&lt;<?php echo base_url();?>&gt;assets/highcharts/jquery.min.js" type="text/javascript"></script>
                <script src="&lt;<?php echo base_url();?>&gt;assets/highcharts/highcharts.js" type="text/javascript"></script>
                <script src="&lt;<?php echo base_url();?>&gt;assets/highcharts/modules/exporting.js" type="text/javascript"></script>
                <script src="&lt;<?php echo base_url();?>&gt;assets/highcharts/modules/offline-exporting.js" type="text/javascript"></script>
                <script type="text/javascript">
                jQuery(function(){
                 new Highcharts.Chart({
                  chart: {
                   renderTo: 'chart',
                   type: 'line',
                  },
                  title: {
                   text: 'Grafik Statistik pengunjung',
                   x: -20
                  },
                  subtitle: {
                   text: 'Count visitor',
                   x: -20
                  },
                  xAxis: {
                   categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
                  },
                  yAxis: {
                   title: {
                    text: 'Total pengunjung'
                   }
                  },
                  series: [{
                   name: 'Data dalam Bulan',
                   data: <?php echo json_encode($grafik); ?>
                  }]
                 });
                });
                </script>


                <!-- /.col-lg-8 -->

                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php base_url()?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php base_url()?>assets/admin/vendor/raphael/raphael.min.js"></script>
    <script src="<?php base_url()?>assets/admin/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php base_url()?>assets/admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php base_url()?>assets/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
