<head>
	<title>User</title>
</head>
<div class="card shdow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text primary">DataTables User</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
      <!-- membuat tombol tambah -->
			<a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success" role="button"><i
					class="fas fa-plus"></i> Tambah</a>
			<br>
			<br>
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
        <!-- membuat table untuk menampilkan data dari database -->
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Password</th>
						<th>Nama</th>
						<th>Grup</th>
						<!-- <th>&nbsp</th> -->
					</tr>
				</thead>
				<tfoot>
					<tbody>
						<?php 
              $no = 1;//inisialisasi $no = 1, untuk penomoran otomatis pada table
              foreach ($user as $baris) {//looping foreach $user sebagai $baris
            ?>
						<tr>
            <!-- menampilkan data dari table -->
							<td><?php echo $no++; ?></td>
							<td><?php echo $baris->username; ?></td>
							<td><?php echo $baris->password; ?></td>
							<td><?php echo $baris->nama; ?></td>
							<td><?php echo $baris->grup; ?></td>
							<!-- <td>
                <center>
                  <a href="update.php?id=<?php //echo $d['id']; ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <a href="delete.php?id=<?php //echo $d['id']; ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </center>
              </td> -->
						</tr>
						<?php } ?>
					</tbody>
			</table>
		</div>
	</div>
</div>
