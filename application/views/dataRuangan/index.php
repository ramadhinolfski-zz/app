<div id="content">
	<section>
		<div class="section-body">
			<h2 class="text-primary">Data Ruangan</h2>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
							<h4>Daftar Lokasi Alat <button type="button" class="btn btn-primary btn-raised btn-sm" data-toggle="tooltip" data-placement="right" data-original-title="Baru"><i class="fa fa-plus"></i></button></h4>	
							</div>

							<div class="col-lg-12">
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Ruangan</th>
												<th>Nama Ruangan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												foreach ($lokasi as $lok) {
													echo "<tr class='gradeA'>
													<td>No</td>
													<td>$lok->id_lokasi</td>
													<td>$lok->nama_lokasi</td>
													<td>Aksi</td>
													</tr>";
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
	</section>
</div>