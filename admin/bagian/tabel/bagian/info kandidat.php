<table class="tbl-kandidat">
	<tr class="col-judul">
		<td class="list-foto-kandidat">
			Foto
		</td>
		<td class="no-urut1">
			No
		</td>
		<td>
			Nama
		</td>
		<td class="col-kelas">
			Kelas
		</td>
		<td class="col-opsi">
			Opsi
		</td>
	</tr>
	<?php
		$query = mysqli_query($connect, "SELECT * FROM kandidat");
		while($data = mysqli_fetch_assoc($query)){
			?>
				<tr class="col-isi-kandidat">
					<td class="list-foto-kandidat">
						<?php
							if(!empty($data['foto'])){
								echo "<img src='../user/img/".$data['foto']."' width='50px' height='auto'/>";
							}else{
								echo "<img src='../user/img/kandidate.png' width='50px' height='auto' />";
							}
						?>
					</td>
					<td class="no-urut">
						<?php echo $data['no_urut'];?>
					</td>
					<td>
						<?php echo $data['nama'];?>
					</td>
					<td class="col-kelas">
						<?php echo $data['kelas'];?>
					</td>
					<td class="col-opsi">
						<a href="fungsi/fungsi.php?hapus=kandidat&id=<?php echo $data['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a> 
						<a href="index.php?edit=kandidat&id=<?php echo $data['id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
					</td>
				</tr>
			<?php
		}
	?>
</table>