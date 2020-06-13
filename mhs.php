<?php
	echo "<table width=500 border=1>";
	echo "<tr>";
	echo "<td> NIM </td>";
	echo "<td>" .$_POST["nim"]. "</td>";
	echo "</tr>
	<tr>
	<td> NAMA </td>";
	echo "<td>" .$_POST["nama"]. "</td>";
	echo "</tr>
	<tr>
	<td> JENIS KELAMIN </td>";
	echo "<td>" .$_POST["kelamin"]. "</td>";
	echo "</tr>
	<tr>
	<td> ALAMAT </td>";
	echo "<td>" .$_POST["alamat"]. "</td>";
	echo"</tr>
	<tr>
	<td> PROGRAM STUDI </td>";
	echo "<td>" .$_POST["prodi"]. "</td>";
	echo "</tr>
	<tr>";
	echo"<td> BAHASA PEMROGRAMAN YANG DIKUASAI </td>";
	echo "<td>";
	if(isset($_POST["kirim"]))
	{
		if (isset($_POST["PASCAL/DELPHI"])){
			echo $_POST["PASCAL/DELPHI"]."<BR>";
		}
		if (isset($_POST["C/C++"])){
			echo $_POST["C/C++"]."<BR>";
		}
		if (isset($_POST["VISUAL BASIC"])){
			echo $_POST["VISUAL BASIC"]."<BR>";
		}
	}; "</td></tr>";
	echo"</table>";
?>