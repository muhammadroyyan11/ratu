<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section class="content">
	<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>

	<p>Analytic Hierarchy Process (AHP) merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki. Hirarki didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif.</p>

	<p>AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi permasalahan kompleks ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis terhadap berbagai faktor yang terlibat dalam permasalahan pengambilan keputusan tersebut. AHP mempertimbangkan aspek kualitatif dan kuantitatif dari suatu keputusan dan mengurangi kompleksitas suatu keputusan dengan membuat perbandingan satu-satu dari berbagai kriteria yang dipilih untuk kemudian mengolah dan memperoleh hasilnya.</p>

	<p>AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain karena alasan-alasan sebagai berikut :</p>

	<ol class="ui list">
		<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang dipilih, sampai pada subkriteria yang paling dalam.</li>
		<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria dan alternatif yang dipilih oleh pengambil keputusan.</li>
		<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
	</ol>

	<br>

	<div class="container">
		<div class="row">
			<div class="col">
				<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
				<table class="ui collapsing striped blue table">
					<thead>
						<tr>
							<th>Nilai Numerik</th>
							<th>Tingkat Kepentingan <em>(Preference)</em></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="center aligned">1</td>
							<td>Sama pentingnya <em>(Equal Importance)</em></td>
						</tr>
						<tr>
							<td class="center aligned">2</td>
							<td>Sama hingga sedikit lebih penting</td>
						</tr>
						<tr>
							<td class="center aligned">3</td>
							<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
						</tr>
						<tr>
							<td class="center aligned">4</td>
							<td>Sedikit lebih hingga jelas lebih penting</td>
						</tr>
						<tr>
							<td class="center aligned">5</td>
							<td>Jelas lebih penting <em>(Materially more importance)</em></td>
						</tr>
						<tr>
							<td class="center aligned">6</td>
							<td>Jelas hingga sangat jelas lebih penting</td>
						</tr>
						<tr>
							<td class="center aligned">7</td>
							<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
						</tr>
						<tr>
							<td class="center aligned">8</td>
							<td>Sangat jelas hingga mutlak lebih penting</td>
						</tr>
						<tr>
							<td class="center aligned">9</td>
							<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
						</tr>
					</tbody>
				</table>
				<h1><b>NB : Nilai keterangan barang berbahaya di aplikasikan ke nilai Numerik
						pada tingkat kepentingan menurut saaty disesuaikan dengan jenis barang yang dibawa
					</b></h1>
			</div>
			<div class="col">
				<h3 class="ui header">Tabel Keterangan Barang Berbahaya (IMGD)</h3>
				<table class="ui collapsing striped blue table">
					<thead>
						<tr>
							<th>Nilai</th>
							<th>Keterangan</em></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="center aligned">1</td>
							<td>mengindikasikan muatan harus
								dilakukan pemisahan secara <em>away from</em> atau muatan dapat
								diangkut dalam satu dek jika dilakukan pemisahan secara
								horizontal dengan jarak minimal <b>3 meter</b></td>
						</tr>
						<tr>
							<td class="center aligned">2</td>
							<td>mengindikasikan muatan harus dipisahkan secara <em>separated
									from</em> atau muatan yang berbeda jenis dipisahkan dengan
								sekat sehingga terletak di ruangan yang terpisah yang
								tahan akan api dan cairan dengan jarak minimal <b>6 meter</b> secara horizontal</td>
						</tr>
						<tr>
							<td class="center aligned">3</td>
							<td>
								mengindikasikan pemisahan muatan secara <em>separated by a compartement
									or hold from</em> atau muatan berbahaya harus dipisahkan dengan muatan
								berbahaya lainnya dengan sekat ruangan terpisah namun masih dalam
								satu dek secara horizontal dengan jarak minimal <b>12 meter</b></td>
						</tr>
						<tr>
							<td class="center aligned">4</td>
							<td>mengindikasikan adanya pemisahan muatan secara <em>separated
									longitudinaly by an intervening complete compartment or
									hold from</em> atau muatan berbahaya dipisahkan secara vertikal
								dengan sekat ruangan terpisah dengan jarak minimal <b>24 meter</b></td>
						</tr>
						<tr>
							<td class="center aligned">0</td>
							<td>Terlepas dari ketentuan pemisahan bagian ini, ammonium nitrat (PBB 1942), pupuk berbasis
								ammonium nitrat (UN 2067), nitrat logam alkali (mis., UN 1486) dan nitrat logam alkali tanah
								(misalnya, UN 1454) dapat disimpan bersama dengan bahan peledak peledak (kecuali EXPLOSIVE,
								BLASTING, TYPE C, UN 0083) asalkan agregat / komposit (pasir, kerikil, batu pecah)
								diperlakukan sebagai peledakan bahan peledak di bawah kelas 1 (IMGD Code bagian 1 sub 7.2.7.2)
								Catatan: Nitrat logam alkali termasuk cesium nitrat (UN 1451), lithium nitrat (UN 2722),
								potassium nitrat (UN 1486), rubidium nitrat (UN 1477) dan natrium nitrat (UN 1498).
								Logam alkali tanah nitrat termasuk barium nitrat (UN 1446), berilium nitrat (UN 2464),
								kalsium nitrat (UN 1454), magnesium nitrat (UN 1474) dan strontium nitrat (UN 1507).</td>
						</tr>
						<tr>
							<td class="center aligned">x</td>
							<td>Pemisahan dilakukan jika terdapat dalam daftar barang berbahaya.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="container">
				<img src="img/hazard_level.jpeg" style="width: fit-content;">
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>