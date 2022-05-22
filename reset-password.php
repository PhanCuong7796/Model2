<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if (isset($_POST['submit'])) {
	$contactno = $_SESSION['contactno'];
	$email = $_SESSION['email'];
	$password = md5($_POST['newpassword']);

	$query = mysqli_query($con, "update tbluser set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
	if ($query) {
		echo "<script>alert('Mật Khẩu Đã Được Thay Đổi Thành Công');</script>";
		session_destroy();
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đặt Lại Mật Khẩu</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript">
		function checkpass() {
			if (document.changepassword.newpassword.value != document.changepassword.confirmpassword.value) {
				alert('Trường Mật Khẩu Mới Và Xác Nhận Mật Khẩu Không Khớp');
				document.changepassword.confirmpassword.focus();
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<div class="row">
		<h2 align="center">Theo Dõi Chi Tiêu Hàng Ngày</h2>
		<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đặt Lại Mật Khẩu</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center">
						<?php if ($msg) {
							echo $msg;
						}  ?> </p>
					<form role="form" action="" method="post" name="changepassword" onsubmit="return checkpass()">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Mật Khẩu Mới" name="newpassword" type="password" value="" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nhập Lại Mật Khẩu" name="confirmpassword" type="password" value="" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="" name="submit" class="btn btn-primary">Tiếp Theo</button><span style="padding-left:240px"><a href="index.php" class="btn btn-primary">Đăng Nhập</a></span>
							</div>

						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>