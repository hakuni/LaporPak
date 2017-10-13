<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($this->session->userdata('status')=='login' && $this->session->userdata('otoritas')<3){ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin LaporPak</title>

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
                <a class="navbar-brand" href="#">Dashboard Admin</a>
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
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
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
                                                      <td>No.</td>
                                                      <td>Nomor KTP Pelapor</td>
                                                      <td>Topik Laporan</td>
                                                      <td>Deskripsi Laporan</td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 0; foreach ($laporan->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo ++$no ?></td>
                                                            <td><?php echo $key['no_KTP'] ?></td>
                                                            <td><?php echo $key['topik'] ?></td>
                                                            <td><?php echo $key['laporan'] ?></td>
                                                            <td>
                                                              <a href="<?php echo base_url() ?>detail/index/<?php echo $key['id_laporan'] ?>">Read</a> |
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


                    <a href="<?php echo base_url()?>register">Tambah Warga</a>
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
                                                      <td>No. KTP</td>
                                                      <td>Nama Warga</td>
                                                      <td>No. Rumah </td>
                                                      <td>Status</td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($warga->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo $key['no_KTP'] ?></td>
                                                            <td><?php echo $key['nama'] ?></td>
                                                            <td><?php echo $key['nomor_rumah'] ?></td>
                                                            <td><?php if($key['otoritas']==1){echo "Super Admin";}
                                                                      else if($key['otoritas']==2){echo "Ketua RT";}
                                                                      else if($key['otoritas']==3){echo "Pemilik";}
                                                                      else if($key['otoritas']==4){echo "Penghuni";}?>
                                                            </td>
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



                    <a href="<?php echo base_url()?>dashboard/add3">Buat Pengumuman</a>
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
                                                      <td>No.</td>
                                                      <td>Topik Pengumuman</td>
                                                      <td>Deskripsi Pengumuman </td>
                                                      <td>Action</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=0; foreach ($infowarga->result_array() as $key): ?>
                                                          <tr>
                                                            <td><?php echo ++$no ?></td>
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
                    <?php
                        foreach($data as $data){
                            $bulan[] = $data->bulan;
                            $jumlah[] = (float) $data->jumlah;
                        }
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Grafik Jumlah User
                            <canvas id="canvas" width="650" height="280"></canvas>
                            <!-- <canvas id="canvas" width="700" height="280"></canvas> -->
                            <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
                            <script>

                                    var lineChartData = {
                                        labels : <?php echo json_encode($bulan);?>,
                                        datasets : [

                                            {
                                                fillColor: "rgba(60,141,188,0.9)",
                                                strokeColor: "rgba(60,141,188,0.8)",
                                                pointColor: "#3b8bba",
                                                pointStrokeColor: "#fff",
                                                pointHighlightFill: "#fff",
                                                pointHighlightStroke: "rgba(152,235,239,1)",
                                                data : <?php echo json_encode($jumlah);?>
                                            }

                                        ]

                                    }

                                var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

                            </script>
                          </div>
                        </div>
                </div>



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
<?php } else redirect('home'); ?>
