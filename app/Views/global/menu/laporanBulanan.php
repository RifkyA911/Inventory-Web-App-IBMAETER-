<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="<?= base_url('css/menukhusus.css') ?>">

<!--Main layout-->
<main class="bg-dark">
	<div class="container pt-4">
		<section class="mb-4">
			<div class="card">
				<div class="card-header text-center py-3">
					<h5 class="mb-0 text-center">
						<strong><i class="fas fa-fw fa-file-alt mr-2"></i>Laporan Bulanan</strong>
					</h5>
				</div>
				<div class="card-body pt-1 bg-light">
					<div class="container mb-3 pb-2" style="border-bottom: 1px solid #dfdfdf;">
						<div class="row">
							<div class="mb-3">
								<div class="row mx-auto">
									<div class="col-md-6">
										<img src="<?= base_url("img/ibpk.png"); ?>" class="card-img" alt="img-1">
									</div>
									<div class="col-md-6 border-left px-4">
										<form action=" <?= base_url('exlapor/pdfprintBulanan'); ?>" method="POST" enctype="multipart/form-data">
											<div class="form-group laporanbulanan-content">
												<label for="ItemTime_before" class="font-weight-bold">Tanggal Awal</label>
												<input type="date" class="form-control" id="Time_before" name="tgl_before" required>
											</div>
											<div class="form-group laporanbulanan-content">
												<label for="ItemTime_after" class="font-weight-bold">Tanggal Akhir</label>
												<input type="date" class="form-control" id="Time_after" name="tgl_after" required>
											</div>
											<div class="laporan-button" style="margin-top:50px;">
												<input type="hidden" class="form-control" value="" name="id_absen">
												<button type="submit" class="btn btn-success col-sm-12 p-4">
													<p class="text-center ntombol"><i class="fas fa-print fa-fw me-3"></i>Cetak Laporan Bulanan</p>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	</div><br>
</main>

<?= $this->endSection() ?>