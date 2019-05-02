<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $jumlah=$_POST['jumlah'];
 $no_meja=$_POST['no_meja'];
 $q=mysqli_query($con,"UPDATE `barang` SET `nama`='$nama',`harga`='$harga',`jumlah`='$jumlah',`no_meja`='$no_meja' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>