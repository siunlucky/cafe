 <!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
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
 	<h4>Edit User</h4>
 	<?php if (isset($_GET['success'])) { ?>
 		<div class="alert alert-success">
 			<p>Edit Data Berhasil !</p>
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
 				<form action="fungsi/edit/edit.php?userList=edit" method="POST" enctype="multipart/form-data">

 					<input type="hidden" class="form-control" value="<?php echo $hasil['id_member']; ?>" name="id_member">

 					<tr>
 						<td>Username</td>
 						<td><input type="text" class="form-control" value="<?php echo $hasil['user']; ?>" name="user"></td>
 					</tr>

 					<tr>
 						<td>Password</td>
 						<td><input type="password" class="form-control" value="" name="pass"></td>
 					</tr>

 					<tr>
 						<td>NIK</td>
 						<td><input type="number" class="form-control" value="<?php echo $hasil['NIK']; ?>" name="NIK"></td>
 					</tr>

 					<tr>
 						<td>Nama</td>
 						<td><input type="text" class="form-control" value="<?php echo $hasil['nm_member']; ?>" name="nm_member"></td>
 					</tr>


 					<tr>
 						<td>Email</td>
 						<td><input type="email" class="form-control" value="<?php echo $hasil['email']; ?>" name="email"></td>
 					</tr>


 					<tr>
 						<td>Alamat</td>
 						<td><input type="text" class="form-control" value="<?php echo $hasil['alamat_member']; ?>" name="alamat_member"></td>
 					</tr>

 					<tr>
 						<td>Telepon</td>
 						<td><input type="number" class="form-control" value="<?php echo $hasil['telepon']; ?>" name="telepon"></td>
 					</tr>

 					<tr>
 						<td>Role</td>
 						<td>
 							<Select class="form-control" name="role">
 								<option value="admin" <?php if ($hasil['role'] == 'admin') { ?> selected <?php } ?>>Admin</option>
 								<option value="manager" <?php if ($hasil['role'] == 'manager') { ?> selected <?php } ?>>Manager</option>
 								<option value="kasir" <?php if ($hasil['role'] == 'kasir') { ?> selected <?php } ?>>Kasir</option>
 							</Select>
 						</td>
 					</tr>
 					<tr>
 						<td>Gambar</td>
 						<td>
 							<input type="file" class="form-control mb-2" name="gambar">
 							<span class="">Last Image : <?php echo $hasil['gambar']; ?></span>
 						</td>
 					</tr>
 					<tr>
 						<td>Tanggal Update</td>
 						<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i"); ?>" name="tgl"></td>
 					</tr>
 					<tr>
 						<td></td>
 						<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
 					</tr>
 				</form>
 			</table>
 		</div>
 	</div>
 <?php } ?>