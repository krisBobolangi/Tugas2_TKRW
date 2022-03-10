<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tabel.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Karyawan</h1>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data Karyawan</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Karyawan</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Aksi</th>			
			
		</tr>
		<?php 
		include "koneksi.php";
		$query= "SELECT * FROM datakaryawan";
		$result=mysqli_query($koneksi,$query);
		if(mysqli_num_rows($result)>0){
		$no = 1;
		while($data = mysqli_fetch_assoc($result)){
		?>
      <tr>
          <!--untuk menampilkannya berdasarkan field yang ada pada tabel data karyawan-->
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['jeniskelamin']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td>
		  <a href="hapus.php?no=<?php echo $data['no']; ?>">Hapus</a>
		  <a href="edit.php?no=<?php echo $data['no']; ?>">Edit</a>
		  </td>
      </tr>
		<?php 
		$no++;
		} 
		}?>
	</table>
</body>
</html>