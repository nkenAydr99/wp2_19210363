<html>
	<head>
		<title>Form Input Matakuliah</title>
	</head>
	<body>
	 <center>
		 <form action="<?= base_url('matakuliah/cetak'); ?>"
		method="post">
		 <table>
			 <tr>
				<th colspan="3">
					Form Input Data Mata Kuliah
				</th>
			 </tr>
			 
			 <tr>
				<td colspan="3">
					<hr>
				</td>
			 </tr>
				 <tr>
					<th>Kode MTK</th>
				 <th>:</th>
			 <td>
				<input type="text" name="kode" id="kode" value="<?= set_value('kode');?>"> 
			 </td>
			 </tr>
			 
			 <tr>
					<th></th>
					<th></th>
					<td>
					<font style="color:red; font-size:8; align:center;"><?= form_error('kode'); ?></font>
				 </td>
			 </tr>
			 
			<tr>
				<th>Nama MTK</th>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="nama" value="<?= set_value('nama');?>">
				</td>
			</tr>
			<tr>
			
			<tr>
					<th></th>
					<th></th>
					<td>
					<font style="color:red; font-size:8; align:center;"><?= form_error('nama'); ?></font>
				 </td>
			 </tr>
				<tr>
					<th>SKS</th>
					<td>:</td>
					<td>
						<select name="SKS">
						<option value="" <?php echo set_select('SKS', '', TRUE); ?> >Pilih Sks</option>
						<option value="2" <?php echo set_select('SKS', '2'); ?> >2</option>
						<option value="3" <?php echo set_select('SKS', '3'); ?> >3</option>
						<option value="4" <?php echo set_select('SKS', '4'); ?> >4</option>
						</select> 
					</td>
				</tr>
			
			<tr>
					<th></th>
					<th></th>
					<td>
					<font style="color:red; font-size:8; align:center;"><?= form_error('SKS'); ?></font>
				 </td>
			 </tr>
			 
				 <td colspan="3" align="center">
				 <input type="submit" value="Submit">
			 </td>
			 </tr>
		 </table>
		 </form>
	</center>
	</body>
</html>

