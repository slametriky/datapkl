<?php  
include "header.php";
include "inc/koneksi.php";
$query = "select * from user";
$result = mysqli_query($con, $query);
$jumlah = mysqli_num_rows($result);
?>
<br>
    <div class="row">
        <div class="col-md-12">
        <h4 class="text-center">Data Mahasiswa</h4>
                    <div class="box-body table-responsive text-center">
                        <table id="example1" class="table table-bordered table-striped ">
                            <thead class="text-center">
                               <tr>
                                    <td>No</td>
                                    <td>NIM</td>
                                    <td>Nama</td>
                                    <td>Jenis Kelamin</td>
                                    <td>Universitas</td>
                                    <td>Tempat KP</td>
                                    <td>Tanggal KP</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>   
                            <?php  
                                $query = "select * from user order by nama";
                                $no = 1;
                                $res = mysqli_query($con, $query);
                                while ($row = mysqli_fetch_assoc($res)) {

                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nim']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['jenis_kelamin']; ?></td>
                                <td><?= $row['universitas']; ?></td>
                                <td><?= $row['tempatkp']; ?></td>
                                <td><?= $row['tanggalkp']; ?></td>   
                                <td>
                                    <a class="btn  btn-primary" href="detail.php?id=<?= $row['id']; ?> ">Detail</a>&nbsp;
                                 
                                </td>
                                        </tr>
                            <?php 
                                $no++;
                                }
                             ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br><br>
	<div class="row footer">
		<div class="col-md-12" >
    		<p class="text-center">Copyright &copy; 2016 PT. Telkom Indonesia Tbk</p>
    	</div>
    </div>
</div>
</body>
</html>