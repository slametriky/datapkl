<?php
if(isset($_POST['save']))
{
    die($tanngal .  $waktu);
    mysqli_query($con,"insert into agenda values('','$tgl[2]-$tgl[1]-$tgl[0]','$waktu','$tempat','$acara')");
    echo "
    <script>
    location.assign('index.php?page=agenda&ps=true2');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    $tgl=explode("-",$tanngal);
    mysqli_query($con,"update agenda set tanngal='$tgl[2]-$tgl[1]-$tgl[0]',waktu='$waktu',tempat='$tempat',acara='$acara' where id='$id'");
    echo "
    <script>
    location.assign('index.php?page=agenda&ps=true1');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate klik <a href='index.php?page=list_agenda'>disini</a> untuk melihat data</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terimpan</div>";

if(isset($_GET['id']))
{

    $data=mysqli_fetch_row(mysqli_query($con,"select * from agenda where id='".$_GET['id']."'"));
$tgl=explode("-",$data[1]);
}

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Form Input Agenda</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="<?php echo isset($data[0])?$data[0]:''; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" id="tgl_agenda" required value="<?php echo isset($_GET['id'])?"$tgl[2]-$tgl[1]-$tgl[0]":""; ?>" name="tanngal" class="form-control" id="inputEmail3" placeholder="tanggal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Waktu</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[2])?$data[2]:''; ?>" name="waktu" class="form-control" id="dua" placeholder="Waktu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[3])?$data[3]:''; ?>" name="tempat" class="form-control" id="dua1" placeholder="Tempat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Acara</label>
                        <div class="col-sm-10">
                            <input type="text" required value="<?php echo isset($data[4])?$data[4]:''; ?>" name="acara" class="form-control" id="tiga" placeholder="Acara">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-info pull-left" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
    