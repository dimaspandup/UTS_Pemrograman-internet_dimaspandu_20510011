<?php
	include "koneksi.php";
	error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	echo"<center>Untuk akses halaman ini anda harus login</center><br>";
	echo"<center><a href=../../index.php> Silahkan Login </center>";
}else{
	$aksi="modul/user/aksiuser.php";
	switch($_GET['aksi']){
	default:
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">PANEL USER ACCOUNT</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">USER ACCOUNT</li>
    </ol>

<div class="card mb-4">
	<div class="card-header"><i class="fas fa-table me-1"></i>Data User Account
	<a class="btn btn-primary" href="media.php?modul=user&aksi=tambah">Tambah Data</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	        <thead>
	            <tr>
	                <th>USER ID</th>
	                <th>USERNAME</th>
	                <th>PASSWORD</th>
	                <th>LEVEL</th>
	                <th>AKSI</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>USER ID</th>
	                <th>USERNAME</th>
	                <th>PASSWORD</th>
	                <th>LEVEL</th>
	                <th>AKSI</th>
	            </tr>
	        </tfoot>
	        <tbody>
	        <?php
	        	$sql=mysqli_query($koneksi, "Select * from admin order by level asc");
	        	while($r=mysqli_fetch_array($sql)){
	        	echo"
	        <tr>
            	<td>$r[id]</td>
            	<td>$r[username]</td>
            	<td>$r[password]</td>
            	<td>$r[level]</td>
            	<td>
            	<a href=?modul=user&aksi=edit&id=$r[id]><button type='button' class='btn
            		btn-info'>Edit</button></a>
				<a href='$aksi?act=hapus&id=$r[id]><button type='button' class='btn
            		btn-danger'>Delete</button></a>
            	</td>
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

<?php
	break;
	case 'tambah'
?>
	<div class="container-fluid px-4">
    <h1 class="mt-4">PANEL USER ACCOUNT</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">FORM TAMBAH USER</li>
    </ol>
   <div class="card-body">
	<form method="POST" action="<?php echo "$aksi?act=tambah"; ?>">
	    <div class="form-group"><label class="small mb-1" for="inputUsername">Username</label>
	        <input class="form-control py-4" name="username" id="inputUsername" type="text" arai-describedby="usernsmeHelp" placeholder="Masukkan Username Anda" />  
	    </div>
	    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
	        <input class="form-control py-4" name="password" id="inputUsername" type="password" arai-describedby="passwordHelp" placeholder="Masukkan Password Anda" />  
	    </div>
	    <div class="form-group"><label class="small mb-1" for="inputlevel">Level</label>
	        <select name ="level" class="form-control">
	        	<option value="administrator">Administrator</option>
	        	<option value="penjual">Penjual</option>
	        	<option value="user">User</option>
	        </select>  
	    </div>
	    <div class="form-group mt-4 mb-0">
	    <input type="submit" value="Daftarkan Akun" class="btn btn-primary btn-block"> 
		</div>
	</form>
	</div>


	</div>
<?php
	break;
	case 'edit' :
?>
	<div class="container-fluid px-4">
    <h1 class="mt-4">PANEL USER ACCOUNT</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">FORM EDIT USER</li>
    </ol>
   <div class="card-body">
	<form method="POST" action="<?php echo "$aksi?act=update"; ?>">
	<?php
		$sql = mysqli_query($koneksi, "Selamat * from admin where id ='$_GET[id]'");
		$r2= mysqli_fetch_array($sql);
	?>



	    <div class="form-group"><label class="small mb-1" for="inputUsername">Username</label>
	        <input class="form-control py-4" name="username" id="inputUsername" type="text" arai-describedby="usernsmeHelp" value="<?php echo $r2['$username'];?>" />  
	    </div>
	    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
	        <input class="form-control py-4" name="password" id="inputUsername" type="password" arai-describedby="passwordHelp" placeholder="Masukkan Password Anda" />
	        *Jika Password  tidak di rubah maka kosongkan saja 
	    </div>
	    <div class="form-group"><label class="small mb-1" for="inputlevel">Level</label>
	        <select name ="level" class="form-control">
	        	<option valu="<?php echo $r2['level'];?>" selected>
	        		<?php echo $r2['level'];?></option>
	        	<option value="Administrator">Administrator</option>
	        	<option value="Penjual">Penjual</option>
	        	<option value="User">User</option>
	        </select>  
	    </div>
	    <div class="form-group mt-4 mb-0">
	    <input type="submit" value="Daftarkan Akun" class="btn btn-primary btn-block"> 
		</div>
	</form>
	</div


<?php
	break;
}
}
?>
