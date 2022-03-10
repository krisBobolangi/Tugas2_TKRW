<?php
include "koneksi.php";
?>
<html>
<head>
<title></title>
</head>
<body style = 'margin : 20px; font : 16px arial;'>
<center>
<p> Tambah Data Karyawan</p>
<form method = 'POST' action = 'tambah_aksi.php'>
<table border = '1' cellspacing = '1' cellpadding = '10'
style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
<tr>
<td> Nama Karyawan</td>
<td width = '5' align = 'center'> : </td>
<td> <input type = 'text' placeholder='Nama Karyawan' name = 'nama' /> </td>
</tr>
<tr>
<td> Jenis Kelamin </td>
<td align = 'center'> : </td>
<td> <input type = 'text' placeholder='Jenis Kelamin' name = 'jeniskelamin' /> </td>
</tr>
<tr>
<td> Alamat </td>
<td align = 'center'> : </td>
<td> <input type = 'text' placeholder='Alamat' name = 'alamat' /> </td>
</tr>
<tr>
<td colspan = '3' align = 'center'>
<input type = 'submit' name = 'submit' value = 'Submit'/>
<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
</tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>