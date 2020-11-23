<?php
	$judul=["No","Nama","Tinggi Badan","Posisi"];
	$baris1=[1,"Cristiano Messi",180,"Striker"];
	$baris2=[2,"Bejo Leonardo",167,"Midfielder"];
	$baris3=[3,"Alfa Midi",190,"Defender"];
?>
<!doctype html>
<html>
	<head>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
	</head>
	<body class="mt-5 mb-5 ml-5 mr-5">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col"><?=$judul[0];?></th>
					<th scope="col"><?=$judul[1];?></th>
					<th scope="col"><?=$judul[2];?></th>
					<th scope="col"><?=$judul[3];?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row"><?=$baris1[0];?></th>
					<td><?=$baris1[1];?></td>
					<td><?=$baris1[2];?></td>
					<td><?=$baris1[3];?></td>
				</tr>
				<tr>
					<th scope="row"><?=$baris2[0];?></th>
					<td><?=$baris2[1];?></td>
					<td><?=$baris2[2];?></td>
					<td><?=$baris2[3];?></td>
				</tr>
				<tr>
					<th scope="row"><?=$baris3[0];?></th>
					<td><?=$baris3[1];?></td>
					<td><?=$baris3[2];?></td>
					<td><?=$baris3[3];?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
