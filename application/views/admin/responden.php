<!DOCTYPE html>
<html>
<head>
	<title>Import Data Responden</title>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>Usia</td>
			<td>Jenis Kelamin</td>
			<td>Pekerjaan</td>
			<td>Rute</td>
			<td>Waktu Berangkat</td>
			<td>PK1</td>
			<td>Waktu Pulang</td>
			<td>PK2</td>
			<td>PK3</td>
			<td>PK4</td>
			<td>PK5</td>
			<td>PK6</td>
			<td>PK7</td>
			<td>PK8</td>
			<td>PK9</td>
			<td>PK10</td>
		</tr>
		<?php
		foreach ($data_survey as $k0 => $v0) {	
		?>	
		<tr>
			<td><?php echo $v0['id'] ?></td>
			<td><?php echo $v0['usia'] ?></td>
			<td><?php echo $v0['jenis_klmin'] ?></td>
			<td><?php echo $v0['pekerjaan'] ?></td>
			<td><?php echo $v0['rute'] ?></td>
			<td><?php echo $v0['waktu_brkt'] ?></td>
			<td><?php echo $v0['pk1'] ?></td>
			<td><?php echo $v0['waktu_plng'] ?></td>
			<td><?php echo $v0['pk2'] ?></td>
			<td><?php echo $v0['pk3'] ?></td>
			<td><?php echo $v0['pk4'] ?></td>
			<td><?php echo $v0['pk5'] ?></td>
			<td><?php echo $v0['pk6'] ?></td>
			<td><?php echo $v0['pk7'] ?></td>
			<td><?php echo $v0['pk8'] ?></td>
			<td><?php echo $v0['pk9'] ?></td>
			<td><?php echo $v0['pk10'] ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<br>

	<h3>Formulir Import Data dari excel</h3>
	<form method="POST" action="<?php echo base_url('import_excel/upload') ?> ">
		
	</form>

</body>
</html>