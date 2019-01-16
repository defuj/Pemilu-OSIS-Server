<div id="live-data"></div>
	<!-- page-content-wrapper -->
	<div class="page-content-toggle" id="page-content-wrapper">
		<div class="container-fluid">

			<!-- 1st row -->
			<div class="row m-b-2">

				<div class="col-lg-4">
					<div class="card card-block statistik">
						<center><h4 class="card-title">Statistik Pemilu</h4></center>
						<div id="users-medium-pie-chart"></div>
						<iframe name="DiagramFrame" id="mydiagram" src="http://192.168.173.2/pemilu/admin/bagian/diagram/index.php" width="100%" scrolling="no"></iframe>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card card-block dua">
						<h4 class="card-title">Categories</h4>
						<div id="users-category-pie-chart"></div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card card-block tiga statistik">
						<center><h4 class="card-title">Data Pemilih</h4></center>
						<div id="users-device-doughnut-chart users-medium-pie-chart"></div>
						<iframe name="DiagramFrame" id="mydiagram" src="http://192.168.173.2/pemilu/admin/bagian/tabel/index.php" width="100%" scrolling="no"></iframe>
					</div>
				</div>


			</div>
			<!-- /1st row -->

			<!-- 2nd row -->
			<div class="row">
				<div class="col-lg-6">
					<div class="card card-block empat">
						<center><h4 class="card-title m-b-2">
							<?php
							if(!empty($_GET['pemilih'])){
								if(!empty($_GET['edit'])){
									echo "Edit Data Pengguna";
								}else{
									echo "Tambah Pengguna";
								}
							}else{
								if(!empty($_GET['edit'])){
									echo "Edit Data Kandidat";
								}else{
									echo "Tambah Kandidat";
								}
							}

							?>
						</h4></center>
						<div id="page-views-per-minute-column-chart sembunyi1"></div>
						<?php
						if(!empty($_GET['pemilih'])){
							if(!empty($_GET['edit'])){
								include "bagian/edit pengguna.php";
							}else{
								include "bagian/input pengguna.php";
							}
						}else{
							if(!empty($_GET['edit'])){
								include "bagian/edit kandidat.php";
							}else{
								include "bagian/input kandidat.php";
							}
						}

						?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card card-block lima">
						<center><h4 class="card-title m-b-2">
							<?php
								if(!empty($_GET['pemilih'])){
									echo "Pengguna";
								}else{
									echo "Kandidat";
								}
							?>
						</h4></center>
						<div id="page-views-per-second-column-chart sembunyi2"></div>
						<?php
							if(!empty($_GET['pemilih'])){
								include "bagian/daftar pengguna.php";
							}else{
								include "bagian/info kandidat.php";
							}
						?>
					</div>
				</div>
			</div>
			<!-- /2nd row -->

			<!-- 3rd row -->
			<div class="row">
				<div class="col-md-12">
					<div class="card card-block enam">
						<h4 class="card-title">Location</h4>
						<div id="users-state-bar-chart"></div>
					</div>
				</div>
			</div>
			<!-- /3rd row -->

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- /page-content-wrapper -->
