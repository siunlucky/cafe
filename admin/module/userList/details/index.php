<?php
$id = $_GET['userList'];
$hasil = $lihat->user_edit($id);
?>

<?php

if (!($role == 'admin')) { ?>
	<h1>YOUR ACCESS IS DENIDED</h1>
<?php
} else { ?>
	<a href="index.php?page=userList" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
	<h4>Details User</h4>
	<?php if (isset($_GET['success'])) { ?>
		<div class="alert alert-success">
			<p>Tambah Data Berhasil !</p>
		</div>
	<?php } ?>
	<?php if (isset($_GET['remove'])) { ?>
		<div class="alert alert-danger">
			<p>Hapus Data Berhasil !</p>
		</div>
	<?php } ?>
	<div class="card card-body">
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<td>Username</td>
					<td><?php echo $hasil['user']; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $hasil['nm_member']; ?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td><?php echo $hasil['NIK']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $hasil['email']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo $hasil['alamat_member']; ?></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><?php echo $hasil['telepon']; ?></td>
				</tr>
				<tr>
					<td>Role</td>
					<td><?php echo $hasil['role']; ?></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>
						<img src="assets/img/user/<?php echo $hasil['gambar']; ?>" alt="#" class="" style="width: 300px;" />
					</td>
				</tr>
				<tr>
					<td>Tanggal Input</td>
					<td><?php echo $hasil['tgl_input']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Update</td>
					<td><?php echo $hasil['tgl_update']; ?></td>
				</tr>
			</table>
		</div>
	</div>

<?php } ?>