<?php
session_start();
if(empty($_SESSION['login'])) {
    header("location:admlogin.php");
} 
extract($_POST);
include "../inc/koneksi.php";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="dist/css/summernote.css">
        <script src="dist/js/summernote.js"></script>
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="index.php" class="logo">
                    <span class="logo-mini"><b>RI</b>KY</span>
                    <span class="logo-lg"><b>Administrator</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
            </header>
            <aside class="main-sidebar">
        <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MENU NAVIGASI</li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-file"></i><span>Data Mahasiswa</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="index.php?page=mahasiswa"><i class="glyphicon glyphicon-pencil"></i> Input Data Mahasiswa</a></li>
                        <li><a href="index.php?page=list_mahasiswa"><i class="glyphicon glyphicon-list"></i> List Data Mahasiswa</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=laporan"><i class="glyphicon glyphicon-print"></i> <span>Laporan</span></a></li>
                <li><a href="index.php?page=grafik"><i class="glyphicon glyphicon-modal-window"></i> <span>Grafik</span></a></li>
                <li><a href="index.php?page=gantipass"><i class="glyphicon glyphicon-user"></i> <span>Ganti Password</span></a></li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    </aside>
                <div class="content-wrapper">
                    <section class="content">
                        <?php  



?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title text-center">Cetak Data Mahasiswa KP</h3>
            </div>
              <div class="box-body">
                    <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                <a href="seluruh.php" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Cetak Seluruh Data</a><br><br>
                <form class="form-inline" action="" method="get">
                    <div class="form-group">
                        <label>Tanggal KP</label>
                        <input type="text" class="form-control" required name="kp" placeholder="Tanggal KP">
                    </div>
                    <div class="form-group">
                        &nbsp;<label>Sampai</label>
                            <input type="text" required  class="form-control" name="selesai" placeholder="Sampai">    
                    </div>
                    <input type="submit" name="tampil" class="btn btn-primary" value="Tampilkan">
                
                </form>          
                         <?php  
                         if (isset($_GET['tampil']) == 'Tampilkan') {
                             
                             $kp = $_GET['kp'];
                             $selesai = $_GET['selesai'];

                             $alamat = "cetak.php?kp=$kp&selesai=$selesai";

                            $sql = "SELECT * FROM user WHERE tanggalkp BETWEEN '$kp' AND '$selesai' order by nama";
                            $hasil = mysqli_query($con, $sql);
                            $no = 0;
                            ?>                            
                            <a href="<?= $alamat; ?>" target="_blank" class="btn btn-info">Cetak</a>
                            <table id="" class="table table-bordered table-striped">
                            <thead>
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Universitas</th>
                        <th>Tempat KP</th>
                        <th>Tanggal KP</th>
                        <th>Telepon</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            if (mysqli_num_rows($hasil)) {
                                while($row = mysqli_fetch_assoc($hasil)) { 
                                    $no++; ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jenis_kelamin']; ?></td>
                            <td><?= $row['universitas']; ?></td>
                            <td><?= $row['tempatkp']; ?></td>
                            <td><?= $row['tanggalkp']; ?></td>
                            <td><?= $row['telepon']; ?></td>
                        </tr>
                             <?php       
                                }
                            } else {
                                echo '<tr><td>Data tidak ditemukan</td></tr>';
                            }
                        }
                            ?>
                    </tbody>
                </table>
        </div>
    </div>
                    </section>
                </div>
                <footer class="main-footer">                
                    <strong>Copyright &copy; 2016 PT. Telkom Indonesia</strong> All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>        
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.konten').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true, // set focus to editable area after
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'hr']],
                        ['view', ['fullscreen', 'codeview']]
                    ],                    
                    onPaste: function (e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        setTimeout(function () {
                            document.execCommand('insertText', false, bufferText);
                        }, 10);
                     }                    
                });                    
            });
        </script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/knob/jquery.knob.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>
        <script>
            $('.tgl').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
    </body>
    </html>


