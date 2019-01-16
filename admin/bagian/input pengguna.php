<form action="fungsi/fungsi.php?tambah=pengguna" method="post" enctype="multipart/form-data">
<table id="inputKandidat">
	<tr>
		<!-- <td class="col-input col1" colspan="2">
			<img src="img/kandidate.png" class="foto-kandidat" width="120px" height="auto"/></br>
			<input type="file" name="file" id="file" class="inputfile" accept="image/jpeg, image/png"/>
			<label for="file"><center><strong><i class="fa fa-upload" aria-hidden="true"></i>  Pilih Foto</strong></center></label>
		</td>
		<td>
			<img src="img/kandidate.png" class="foto-kandidat" width="120px" height="auto"/></br>
			<input type="file" name="file" id="file" class="inputfile" accept="video/mp4"/>
			<label for="file"><center><strong><i class="fa fa-upload" aria-hidden="true"></i>  Pilih Video</strong></center></label>
		</td> -->
		<td class="col-input">
			<input type="text" name="nama" placeholder="Nama" class="input-form" required/></br>
			<input type="email" name="email" placeholder="E-Mail" class="input-form" required/></br>
			
			<table>
				<tr>
					<td>
						<select name="kelas" class="input-form" required>
							<?php
								echo '<option>Pilih Kelas</option>';
								$kelas = array(1=>"X","XI","XII","GURU");
								foreach($kelas as $kls){
									echo '<option value="'.$kls.'">'.$kls.'</option>';
								}
							?>
						</select>
					</td>
					<td>
						<input type="number" name="pin" placeholder="PIN (4 Digit)" class="input-form" oninput="maxLengthCheck(this);" maxlength="4" required/></br>
						<script type="text/javascript">
							function maxLengthCheck(object){
								if(object.value.length > object.maxlength){
									object.value = object.value.slice(0, object.maxlength);
								}
							}
						</script>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td>
			<input type="submit" name="add" value="TAMBAHKAN DATA" class="btn-add-data" onClick="proses();"/>
		</td>
	</tr>
</table>
</form>

</br>
</br>

<form>
<table id="inputKandidat">
	<tr class="judul-import">
		<td colspan="2">
			<center><h5>IMPORT DATA MASAL</h5></center>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="pilih-hapus-data">
			<input type="checkbox" name="pilihan" class="checkbox-pilihan" id="checkbox"/>
			<label for="checkbox">Hapus data sebelumnya.</label>
		</td>
	</tr>
	<tr>
		<td class="col-inputCSV">
			<input type="file" name="data" id="file" class="inputfileCSV"/>
			<label for="file"><center><strong><i class="fa fa-folder-open" aria-hidden="true"></i>  Pilih File Excel</strong></center></label>
		</td>
		<td  class="col-inputCSV">
			<input type="submit" name="import" class="btn-import_2"/>
			<label for="submit" name="progres"><center><strong><i class="fa fa-cloud-upload" aria-hidden="true"></i>  IMPORT DATA</strong></center></label>
		</td>
	</tr>
</table>
</form>