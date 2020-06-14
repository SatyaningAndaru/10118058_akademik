<?php
	// include models/model_pelanggan.php
	include "models/model_pelanggan.php";
	
	$plg = new Pelanggan($connection);
?>

<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Pelanggan</h3>
							<p class="panel-subtitle">Selamat Datang, Admin</p>
						</div>
					</div>
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pelanggan</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th>No.</th>
													<th><center>Nama Pelanggan</center></th>
													<th><center>Jenis Kelamin</center></th>
													<th><center>Nomor Handphone</center></th>
													<th><center>Alamat</center></th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$no = 1;
													$tampil = $plg->tampil();
													while($data = $tampil->fetch_object()) {
												?>
												<tr>
													<td><?php echo $no++."."; ?></td>
													<td><?php echo $data->nama_pelanggan; ?></td>
													<td><center><?php echo $data->jk; ?></center></td>
													<td><center><?php echo $data->no_hp; ?></center></td>
													<td><?php echo $data->alamat; ?></td>
													<td><button class="btn btn-info btn-xs"><i class="lnr lnr-pencil"></i></button>
														<button class="btn btn-danger btn-xs"><i class="lnr lnr-trash"></i></button>
													</td>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<!-- END MAIN -->