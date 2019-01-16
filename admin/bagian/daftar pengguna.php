<table class="tbl-kandidat">
	<tr class="col-judul">
		<td class="nama">
			NAMA
		</td>
		<td class="col-surel">
			E-MAIL
		</td>
		<td class="col-kelas">
			PIN
		</td>
		<td class="col-opsi">
			Opsi
		</td>
	</tr>
</table>
<div class="kotak-pengguna">
<table class="tbl-kandidat">
	<?php
		$query = mysqli_query($connect, "SELECT * FROM pengguna");
		while($data = mysqli_fetch_assoc($query)){
			?>
				<tr class="col-isi-kandidat">
					<td class="nama">
						<?php echo $data['nama'];?>
					</td>
					<td class="col-surel">
						<?php echo $data['surel'];?>
					</td>
					<td class="col-kelas">
						<?php echo $data['pin'];?>
					</td>
					<td class="col-opsi">
						<a href="fungsi/fungsi.php?hapus=pengguna&surel=<?php echo $data['surel'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a> 
						<a href="index.php?pemilih=all&edit=pengguna&surel=<?php echo $data['surel'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
					</td>
				</tr>
			<?php
		}
	?>
</table>
</div>
Tips : Untuk mencari data tekan CTRL + F