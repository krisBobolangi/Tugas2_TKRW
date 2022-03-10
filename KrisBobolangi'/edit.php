<?php
 include("Koneksi.php"); // untuk memanggil file koneksi.php
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<table>
<?php
  //untuk mengambil value dari paramater id=
  $no=$_GET['no'];
  //query sql untuk menampilkan data berdasarkan id
  $query="SELECT * FROM datakaryawan WHERE no='".$no."'";
  $result=mysqli_query($koneksi,$query);
  //menampilkan data dari query database berbentuk array an ditampilkan di form
  if (mysqli_num_rows($result) > 0){
	$data = mysqli_fetch_assoc($result);
}

 //syntax php untuk edit data ke database
 if (isset($_POST['edit'])) {
  # code...
  $query="UPDATE datakaryawan SET nama='".$_POST['nama']."', jeniskelamin='".$_POST['jeniskelamin']."',alamat='".$_POST['alamat']."' WHERE no='$no'";
	$result=mysqli_query($koneksi,$query);
  if ($query) {
   # code...
   echo "data berhasil disimpan";
   
   $query="SELECT * FROM datakaryawan WHERE no='".$no."'";
   $result=mysqli_query($koneksi,$query);
   //menampilkan data dari query database berbentuk array an ditampilkan di form
   echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
  <meta http-equiv='refresh' content='2; url= index.php'/> ";
  }else{
   echo "data gagal disimpan".mysql_error();
  }
 }
?>
 <!--form edit -->
 <form method="POST">
  <tr>
   <td>Nama Karyawan</td>
   <td><input name="nama" size="30" value="<?php echo $data['nama']; ?>"></td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td><input  name="jeniskelamin" size="30" value="<?php echo $data['jeniskelamin']; ?>"></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input  name="alamat" size="30" value="<?php echo $data['alamat']; ?>"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="edit" value="Edit"></td>
  </tr>
 </form>
</table>

</body>
</html>