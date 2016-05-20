<?php
session_start();
include'conn.php';
//cek ada variable post email dan password
if(isset($_POST['nama']) and isset($_POST['email']) and isset($_POST['password']))
{
	//masukkan ke variable
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	//cek ke table user
	$s=$koneksi->prepare("select *from user where email='".$email."' and password='".$password."'");
	$s->execute();
	$data=$s->fetch(PDO::FETCH_ASSOC);
	//jika data ada, tampilkan pesan email sudah terdaftar
	if(!empty($data))
	{
		?>
		<div style="width:100%;display:block;clear: both; background:red;color:white;margin: 20px; padding:10px;">E-mail sudah terdaftar</div>
		<?php
		$_SESSION['logged_in']=false;
		//jika data kosong, input ke table user dan assign ke session kemudian diarahkan ke index
	}
	else
	{
		$_SESSION['logged_in']=true;
		$_SESSION['nama']=$nama;
		$_SESSION['email']=$email;
		$new=$koneksi->prepare("insert into user (`nama`,`email`,`password`) values ('".$nama."','".$email."','".$password."')");
		$new->execute();
		$_SESSION['id']=$koneksi->lastInsertID();
		header("location:index.php");
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="assets/css/css.css">
	</head>
	<body>
		<div style="width:500px;margin:100px auto; border:5px solid #dd4814;padding: 20px;padding-right: 40px; background: #333;color:#fff;">
			<h1 style="text-align: center">Sign In</h1>
			<form method="POST" action="">
				<table>
					<tr>
						<td>Name</td>
						<td><input tupe="text" name="nama"></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td colspan="2">Have Account? <a href="login.php" style="color:white;">Sign In here</a></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit">Sign Up</button></td>
					</tr>
				</table>
			</form>
		</div>
	</body>	
</html>