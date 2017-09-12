<?php
include "../inc/koneksi.php";

if(isset($_GET['del']))
$id=$_GET['del'];
if(isset($_GET['data']))
{
switch($_GET['data'])
{
    case 'pengunjung':
    mysqli_query($con,"delete from pengunjung where id='$id'");
    header("location:index.php?page=pengunjung");
    break;        
    case 'list_mahasiswa':
    mysqli_query($con,"delete from user where id='$id'");
    header("location:index.php?page=list_mahasiswa");
    break;
}
}
?>