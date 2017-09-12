<?php  
include "header.php";
include "inc/koneksi.php";
    if(isset($_POST['add'])) { 
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jeniskelamin'];
        $universitas = $_POST['universitas'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $query = "INSERT INTO pengunjung
        VALUES 
            ('', '$nama', '$jenis_kelamin', '$universitas', '$jurusan', '$email') ";
        $query = mysqli_query($con, $query);
        if ($query){
            header("Location: pengunjung.php");
        } else {
            echo 'Error saat insert data ' . mysqli_error($koneksi);
        }
    }
?>
<br>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Silahkan Isi Data Pengunjung</div>
                <div class="panel-body">
                    <form method="post" action="" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-md-offset-1" for="nama">Nama</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" required name="nama" placeholder="Nama">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-offset-1 control-label col-md-3" for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="col-md-3">
                                <label class="radio-inline"><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</label>
                                <label class="radio-inline"><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-offset-1 control-label col-md-3" for="nama">Universitas</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" required name="universitas" placeholder="Universitas">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-md-offset-1 control-label col-md-3" for="jurusan">Jurusan</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" required name="jurusan" placeholder="Jurusan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-offset-1 control-label col-md-3" for="email">Email</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" required name="email" placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <label class="col-md-offset-1 col-md-3 control-label">&nbsp;</label>
                                <div class="col-md-6">
                                    <input type="submit" name="add" class="btn btn-primary" value="Simpan">
                                    <a href="pengunjung.php" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
       </div>
    </div><br><br><br>
	<div class="row footer">
		<div class="col-md-12" >
    		<p class="text-center">Copyright &copy; 2016 PT. Telkom Indonesia Tbk</p>
    	</div>
    </div>
</div>
</body>
</html>