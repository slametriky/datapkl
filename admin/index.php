<?php
session_start();
if(empty($_SESSION['login'])) {
    header("location:admlogin.php");
} 
extract($_POST);

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
            <?php include'menu.php'; ?>
                <div class="content-wrapper">
                    <section class="content">
                        <?php 
                        if(isset($_GET['page'])) {
                            switch($_GET['page']) {                   

                            case 'mahasiswa': include'mahasiswa.php'; break;    
                            case 'pengunjung': include'pengunjung.php'; break;    
                            case 'list_mahasiswa': include'list_mahasiswa.php'; $order = 4;
                                break; 
                            case 'laporan': include 'laporan.php'; break; 
                            case 'gantipass': include 'gantipass.php'; break; 
                            case 'grafik': include'grafik.php'; break; 
                        }   
                            } else {
                            echo "<h3 class='text-center'>Selamat Datang Administrator</h3>";
                        }   
                        ?>
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
                    focus: true, // set focus to editable area after initializing summernote
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