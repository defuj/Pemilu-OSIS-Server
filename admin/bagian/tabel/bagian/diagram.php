	<!-- page-content-wrapper -->
	<div class="page-content-toggle2" id="page-content-wrapper">
		<div class="container-fluid">

			<!-- 1st row -->
			<div class="row m-b-2">

				<div class="col-lg-4">
					<div class="card card-block statistik">
						<center><h4 class="card-title">Statistik Pemilu</h4></center>
						<div id="users-medium-pie-chart"></div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card card-block dua">
						<h4 class="card-title">Categories</h4>
						<div id="users-category-pie-chart"></div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card card-block tiga">
						<center><h4 class="card-title" style="display:none;">Data Pemilih</h4></center>
						<div id="users-device-doughnut-chart"></div>

						<?php
							include "bagian/tabel.php";
						?>
					</div>
				</div>

				
			</div>
			<!-- /1st row -->

			<!-- 2nd row -->
			<div class="row">
				<div class="col-lg-6">
					<div class="card card-block empat">
						<center><h4 class="card-title m-b-2">
							
						</h4></center>
						<div id="page-views-per-minute-column-chart sembunyi1"></div>
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card card-block lima">
						<center><h4 class="card-title m-b-2">
							
						</h4></center>
						<div id="page-views-per-second-column-chart sembunyi2"></div>
						
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