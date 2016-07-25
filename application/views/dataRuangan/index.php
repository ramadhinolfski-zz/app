<div id="content">
	<section>
		<div class="section-body">
			<h2 class="text-primary">Data Ruangan</h2>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
							<h4>Daftar Lokasi Alat <button type="button" class="btn btn-primary btn-icon-toggle" data-toggle="tooltip" data-placement="right" data-original-title="Baru"><i class="fa fa-plus"></i></button></h4>	
							</div>

							<div class="col-lg-12">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th width="40"><b>No</b></th>
											<th width="50"><b>Kode</b></th>
											<th><b>Nama Ruangan</b></th>
											<th width="150" class="text-right"><b>Aksi</b></th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											foreach ($lokasi as $lok) {
												echo "<tr>
												<td>$no</td>
												<td>$lok->id_lokasi</td>
												<td>$lok->nama_lokasi</td>
												<td class='text-right'>

													<button type='button' class='btn btn-icon-toggle' data-toggle='tooltip' data-placement='top' data-original-title='Edit'><i class='fa fa-pencil'></i></button>
													<button type='button' class='btn btn-icon-toggle' data-toggle='tooltip' data-placement='top' data-original-title='Lihat'><i class='fa fa-eye'></i></button>
													<button type='button' class='btn btn-icon-toggle' data-toggle='tooltip' data-placement='top' data-original-title='Hapus'><i class='fa fa-trash'></i></button>
												</td>
												</tr>";
												$no++;
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
	</section>
</div>