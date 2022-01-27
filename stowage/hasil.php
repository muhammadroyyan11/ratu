<?php

include('config.php');
include('fungsi.php');


// menghitung perangkingan
$jmlKriteria 	= getJumlahKriteria();
$jmlAlternatif	= getJumlahAlternatif();
$nilai			= array();

// mendapatkan nilai tiap alternatif
for ($x = 0; $x <= ($jmlAlternatif - 1); $x++) {
	// inisialisasi
	$nilai[$x] = 0;

	for ($y = 0; $y <= ($jmlKriteria - 1); $y++) {
		$id_alternatif 	= getAlternatifID($x);
		$id_kriteria	= getKriteriaID($y);

		$pv_alternatif	= getAlternatifPV($id_alternatif, $id_kriteria);
		$pv_kriteria	= getKriteriaPV($id_kriteria);

		$nilai[$x]	 	+= ($pv_alternatif * $pv_kriteria);
	}
}

// update nilai ranking
for ($i = 0; $i <= ($jmlAlternatif - 1); $i++) {
	$id_alternatif = getAlternatifID($i);
	$query = "INSERT INTO ranking VALUES ($id_alternatif,$nilai[$i]) ON DUPLICATE KEY UPDATE nilai=$nilai[$i]";
	$result = mysqli_query($koneksi, $query);
	if (!$result) {
		echo "Gagal mengupdate ranking";
		exit();
	}
}

include('header.php');

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section class="content">
	<h2 class="ui header">Hasil Perhitungan</h2>
	<table class="ui celled table">
		<thead>
			<tr>
				<th>Overall Composite Weight</th>
				<th>Priority Vector (rata-rata)</th>
				<?php
				for ($i = 0; $i <= (getJumlahAlternatif() - 1); $i++) {
					echo "<th>" . getAlternatifNama($i) . "</th>\n";
				}
				?>
			</tr>
		</thead>
		<tbody>

			<?php
			for ($x = 0; $x <= (getJumlahKriteria() - 1); $x++) {
				echo "<tr>";
				echo "<td>" . getKriteriaNama($x) . "</td>";
				echo "<td>" . round(getKriteriaPV(getKriteriaID($x)), 5) . "</td>";

				for ($y = 0; $y <= (getJumlahAlternatif() - 1); $y++) {
					echo "<td>" . round(getAlternatifPV(getAlternatifID($y), getKriteriaID($x)), 5) . "</td>";
				}


				echo "</tr>";
			}
			?>
		</tbody>

		<tfoot>
			<tr>
				<th colspan="2">Total</th>
				<?php
				for ($i = 0; $i <= ($jmlAlternatif - 1); $i++) {
					echo "<th>" . round($nilai[$i], 5) . "</th>";
				}
				?>
			</tr>
		</tfoot>

	</table>


	<h2 class="ui header">Perangkingan</h2>
	<table class="ui celled collapsing table">
		<thead>
			<tr>
				<th>Peringkat</th>
				<th>Alternatif</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query  = "SELECT id,nama,id_alternatif,nilai FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
			$result = mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
			?>
				<tr>
					<?php if ($i == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>" . $i . "</td>";
					}

					?>

					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nilai'] ?></td>
				</tr>

			<?php
			}


			?>
		</tbody>
	</table>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Convert to Stowage Plan Layout
		<i class="right arrow icon"></i>
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Example Stowage Layout</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<img src="img/stowage_ex.jpeg" alt="stwg">
						<div class="col">
							<h2 class="ui header">Keterangan Warna</h2>
							<table class="ui celled collapsing table">
								<thead>
									<tr>
										<th>Warna</th>
										<th>Nama</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="ui label bg-warning"> ‎ ‎ ‎ </div>
										</td>
										<td>Kayu</td>
									</tr>
									<tr>
										<td>
											<div class="ui label" style="background-color: deepskyblue;"> ‎ ‎ ‎ </div>
										</td>
										<td>Alkohol</td>
									</tr>
									<tr>
										<td>
											<div class="ui label bg-success"> ‎ ‎ ‎ </div>
										</td>
										<td>Merkuri</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>