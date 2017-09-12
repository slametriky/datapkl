<?php
$con1 = mysqli_connect("localhost", "root", "garuda22","pkl");
if(isset($_POST['simpan']))
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $universitas = $_POST['universitas'];
    $tempatkp = $_POST['tempatkp'];
    $tanggalkp = $_POST['tanggalkp'];
    $tannggalselesai = $_POST['tannggalselesai'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];


    $tglkp = explode("-",$tanggalkp);
    arsort($tglkp); 
    $tglkp = implode("-", $tglkp);

    $tglselesai = explode("-",$tannggalselesai);
    arsort($tglselesai); 
    $tglselesai = implode("-", $tglselesai);    


    $query = mysqli_query($con1,"insert into user values('','$nim','$nama','$jenis_kelamin','$universitas', '$tempatkp', '$tglkp',
                '$tglselesai', '$alamat', '$telepon')");

    if ($query) {
         echo "<script>
                   alert('Berhasil memasukkan data');
                    document.location='index.php?page=list_mahasiswa';
                </script>
                ";
    } else {
        echo "<script>alert('Gagal disimpan')</script>";
    }
    
}
elseif(isset($_POST['edit']))
{
    $id = $_GET['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $universitas = $_POST['universitas'];
    $tempatkp = $_POST['tempatkp'];
    $tanggalkp = $_POST['tanggalkp'];
    $tannggalselesai = $_POST['tannggalselesai'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $tglkp = explode("-",$tanggalkp);
    arsort($tglkp); 
    $tglkp = implode("-", $tglkp);

    $tglselesai = explode("-",$tannggalselesai);
    arsort($tglselesai); 
    $tglselesai = implode("-", $tglselesai);    

    //die($nim . $nama . $jenis_kelamin . $universitas . $tglkp . $tglselesai . $alamat . $telepon);

    $perintah = mysqli_query($con1,"update user set nim='$nim', nama='$nama', jenis_kelamin= '$jenis_kelamin', universitas = '$universitas', tanggalkp = '$tglkp', tanggalselesai = '$tglselesai', alamat = '$alamat', telepon = '$telepon' where id='$id'");
    if ($perintah) {

    echo "<script>
                   alert('Data berhasil di edit');
                    document.location='index.php?page=list_mahasiswa';
                </script>
                ";
                }
                else {
                    echo "Gagal Disimpan " . mysqli_error($con1);
                
                }
}
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil simpan klik <a href='index.php?page=list_mahasiswa'>disini</a> untuk melihat data</div>";
elseif(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil di update</div>";

if(isset($_GET['id']))
{
    $con1 = mysqli_connect("localhost", "root", "garuda22", "pkl");
    $data=mysqli_fetch_row(mysqli_query($con1,"select * from user where id='".$_GET['id']."'"));
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo isset($_GET['id'])?'Edit ':'Input '; ?>Data Mahasiswa</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
                        <div class="col-sm-2">
                            <input type="text" required value="<?php echo isset($data[1])?$data[1]:''; ?>" name="nim" class="form-control" id="inputEmail3" placeholder="NIM">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-3">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="nama" class="form-control" id="dua" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                        <label class="radio-inline"><input type="radio" <?= $data[3] == "Laki-Laki" ? "checked":""; ?> name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                        <label class="radio-inline"><input type="radio" <?= $data[3] == "Perempuan" ? "checked":""; ?>name="jenis_kelamin" value="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Universitas</label>
                        <div class="col-sm-3">
                            <input type="text" required  value="<?php echo isset($data[4])?$data[4]:''; ?>" name="universitas" class="form-control" placeholder="Universitas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Tempat KP</label>
                        <div class="col-sm-4">
                                <textarea name="tempatkp" class="form-control" rows="2"><?php echo isset($data[5])?$data[5]:''; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Tanggal KP</label>
                        <div class="col-sm-2" >
                            <input type="text" required  value="<?php echo isset($data[6])?$data[6]:''; ?>" name="tanggalkp" class="form-control tgl"  placeholder="0000-00-00">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label ">Tanggal Selesai</label>
                        <div class="col-sm-2">
                            <input type="text" required  name="tannggalselesai" value="<?php echo isset($data[7])?$data[7]:''; ?>" class="form-control tgl" placeholder="0000-00-00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-4">
                                <textarea name="alamat" class="form-control" rows="2"><?php echo isset($data[8])?$data[8]:''; ?> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label" >Telepon</label>
                        <div class="col-sm-3">
                            <input type="text" required  name="telepon" value="<?php echo isset($data[9])?$data[9]:''; ?>" class="form-control" id="dua" placeholder="Telepon">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id'])?'edit':'simpan'; ?>">&nbsp;&nbsp;
                    <a href="index.php?page=list_mahasiswa" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div> 
    