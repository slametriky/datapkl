<?php  

include "../inc/koneksi.php";

if (isset($_POST['Simpan'])) {
	$passbaru = md5($_POST['password_baru']);
	$konfpass = md5($_POST['konfpass']);
	//cek apakah password sama
	if ($passbaru == $konfpass) {		
		$sql = "UPDATE login SET password = '$passbaru' ";
		$hasil = mysqli_query($con, $sql);	
		if ($hasil) {
			echo "<script>
			       alert('Berhasil ganti password!');
            		document.location='index.php';
			    </script>
			    ";
		} else {
			echo 'Gagal ganti password' . mysqli_error();
		}
	} else {
		echo "<script>
			       alert('Konfirmasi password tidak sesuai!');
            		document.location='index.php?page=gantipass';
			    </script>
			    ";
	}
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Ganti Password</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="box-body">
                <a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a><br><br>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Password Baru</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" required name="password_baru" placeholder="Password Baru">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Konfirmasi Password</label>
                        <div class="col-sm-2">
                            <input type="text" required  class="form-control" name="konfpass" placeholder="Konfirmasi Password">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Simpan" name="Simpan"> &nbsp;&nbsp;
                     <input type="reset" class="btn btn-danger " value="Batal">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>   <!-- /.row -->
    