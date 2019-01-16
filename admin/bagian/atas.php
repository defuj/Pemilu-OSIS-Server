	<!-- header -->
	<nav class="navbar navbar-fixed-top" id="header">
		<div class="container-fluid">
			<div class="navbar-header">
				<div id="sidebar-toggle-button">
					<!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
					<i class="fa fa-pie-chart" aria-hidden="true"></i>
				</div>
				<div class="brand">
					<a href="index.php">
						<span class="hidden-xs-down m-r-3">Pemilu OSIS</span>
					</a>
					<?php
						if(!empty($_SESSION['admin'])){
							?>
					<a href="index.php">
						<span class="lead"><i class="fa fa-clock-o" aria-hidden="true"></i> Real Time</span>
					</a>
					<a href="index.php?kandidat=all">
						<span class="lead keluar-akun"><i class="fa fa-user-secret" aria-hidden="true"></i> Kandidat</span>
					</a>
					<a href="index.php?pemilih=all">
						<span class="lead keluar-akun"><i class="fa fa-users" aria-hidden="true"></i> Pemilih</span>
					</a>
					<a href="fungsi/logout.php">
						<span class="lead keluar-akun"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</span>
					</a>
							<?php
						}
					?>
					
				</div>

			</div>
		</div>
	</nav>
	<!-- /header -->

	<!-- sidebar -->
	<div class="sidebar-toggle" id="sidebar">
		<ul class="nav nav-sidebar">
			<?php
				if(!empty($_SESSION['admin'])){
					?>
						<li>
				<a href="web-analytics-real-time.html" class="active">
					<i class="fa fa-clock-o fa-lg fa-fw" aria-hidden="true"></i>
					<span>Real Time</span>
				</a>
			</li>
			<li role="separator" class="divider"></li>
			
			<li>
				<a href="fungsi/logout.php?keluar=admin">
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Keluar</span>
				</a>
			</li>
			<li role="separator" class="divider"></li>
					<?php
				}else{
					?>
						<li>
				<a href="web-analytics-real-time.html" class="active">
					<i class="fa fa-sign-in fa-lg fa-fw" aria-hidden="true"></i>
					<span>Masuk Admin</span>
				</a>
			</li>
			<li role="separator" class="divider"></li>
					<?php
				}
			?>
			
		</ul>
	</div>
	<!-- /sidebar -->