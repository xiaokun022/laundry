<?php
    include 'header.php'; ?>
<?php

include '../koneksi.php';
?>
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Transaksi Laundry Baru</h4>
		</div>
		<div class="panel-body">
			
			<div class="col-md-8 col-md-offset-2">
				<a href="transaksi.php" clas="btn btn-sm btn-info pull-right">Kembali</a>
				<br/>
				<br/>
				<form method="post" action="transaksi_aksi.php">
					<div class="form-group">
						<label>Pelanggan</label>
						<select class="form-control" name="pelanggan" required="required">
							<option value="">- Pilih Pelanggan</option>
							<option value="">Ninoforyou</option>

							<?php
							
							$data = mysqli_query($koneksi, "select * from pelanggan");
							
							while($d=mysqli_fetch_array($data)){
							    ?>
							    <option value="<?php echo $d['id_pelanggan']; ?>"><? echo $d['nama_pelanggan']; ?></option>
							    <?php
						    }
						    ?>
						</select>
					</div>

					<div class="form-group">
						<label>Berat</label>
						<input type="date" class="form-control" name="tgl_selesai" required="required">
					</div>

					<br/>

					<table class="table table-bordered table-striped">
						<tr>
							<th>Jenis Pakaian</th>
							<th width="20%">Jumlah</th>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
						<tr>
							<td><input type="text" class="form-control" name="pakaian_jenis[]"></td>
							<td><input type="number" class="form-control" name="pakaian_jumlah[]"></td>
						</tr>
					</table>

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>
			</div>
		</div>
	</div>
</div>