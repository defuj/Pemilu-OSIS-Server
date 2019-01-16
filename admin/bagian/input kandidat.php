<form action="fungsi/fungsi.php?AddKandidat=1" method="post" enctype="multipart/form-data">
<table id="inputKandidat">
	<tr>
		<td class="col-input col1" colspan="2">
			<img src="img/kandidate.png" class="foto-kandidat" width="120px" height="auto"/></br>
			<input type="file" name="foto" id="file" class="inputfile" accept="image/jpeg, image/png"/>
			<label for="file"><center><strong><i class="fa fa-upload" aria-hidden="true"></i>  Pilih Foto</strong></center></label>
		</td>
		<td>
			
		</td>
		<td class="col-input col2">
			<input type="text" name="nama" placeholder="Nama Kandidat" class="input-form" required/></br>
			<select name="kelas" class="input-form" required>
				<?php
					echo '<option>Pilih Kelas</option>';
						$kelas = array(1=>"X-1","X-2","X-3","X-4","X-5","X-6","X-7","X-8","X-9","X-10","X-11","X-12","XI-RPL 1","XI-RPL 2","XI-RPL 3","XI-RPL 4","XI-RPL 5","XI-RPL 6","XI-RPL 7","XI-RPL 8","XI-RPL 9","XI-Multimedia 1","XI-Multimedia 2");
						foreach($kelas as $kls){
							echo '<option value="'.$kls.'">'.$kls.'</option>';
						}
				?>
			</select>
			<table>
				<tr>
					<td>
						<select name="nourut" class="input-form" required>
						<option>Nomor Urut</option>
							<?php
								for($a = 1; $a <= 3; $a++){
									echo '<option value="'.$a.'">'.$a.'</option>';
								}
							?>
						</select>
					</td>
					<td>
						<select name="tahun" class="input-form" required>
						<option>Tahun Pemilu</option>
							<?php
								for($a = 2016; $a <= 2020; $a++){
									echo '<option value="'.$a.'">'.$a.'</option>';
								}
							?>
						</select>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td colspan="4">
			<textarea name="visi" class="input-visi" placeholder="Tulis Visi" required></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<textarea name="misi" class="input-misi" placeholder="Tulis Misi" required></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
			<input type="submit" name="add" value="TAMBAHKAN DATA" class="btn-add-data"/>
		</td>
		<td colspan="1">
		<?php
			if(!empty($_GET['tambah'])){
				$isi = $_GET['tambah'];

				if($isi == "sukses"){
					?>
					<div class="sukses-tambah">
						<h6><i class="fa fa-check" aria-hidden="true"></i>  Tambah kandidat berhasil</h6>
					</div>
					<?php	
				}else if($isi == "gagal"){
					?>
					<div class="gagal-tambah">
						<h6><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  
						<?php
							if(!empty($_GET['data'])){
								$isi2 = $_GET['data'];
								if($isi2 == "penuh"){
									echo "Kandidat sudah maksimum";
								}else if($isi2 == "foto"){
									echo "Foto belum dipilih";
								}else if($isi2 == "video"){
									echo "Video belum dipilih";
								}else if($isi2 == "nourut"){
									echo "Nomor urut sudah digunakan";
								}
							}
						?>
						</h6>
					</div>
				<?php
				}	
			}else if(!empty($_GET['hapus'])){
				$isi = $_GET['hapus'];
				if($isi == 'sukses'){
					?>
					<div class="sukses-tambah">
						<h6><i class="fa fa-check" aria-hidden="true"></i>  Berhasil menghapus kandidat</h6>
					</div>
					<?php	
				}else{
					?>
					<div class="gagal-tambah">
						<h6><i class="fa fa-check" aria-hidden="true"></i>  Gagal menghapus kandidat</h6>
					</div>
					<?php	
				}
			}
		?>
		</td>
	</tr>
</table>
</form>
