<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="assets/images/4.jpeg" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <?php
            $uid = $_SESSION['detsuid'];
            $ret = mysqli_query($con, "select FullName from tbluser where ID='$uid'");
            $row = mysqli_fetch_array($ret);
            $name = $row['FullName'];

            ?>
            <div class="profile-usertitle-name"><?php echo $name; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span> Đang Hoạt Động </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu">
        <li class="active"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Bảng Thống Kê </a></li>



        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Quản Lý <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="add-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Thêm Chi Tiêu
                <li><a class="" href="manage-expense.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Quản Lý Chi Tiêu
                    </a></li>

            </ul>

        </li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-navicon">&nbsp;</em> Báo Cáo <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="expense-datewise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Tiêu Theo Ngày
                    </a></li>
                <li><a class="" href="expense-monthwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Tiêu Theo Tháng
                    </a></li>
                <li><a class="" href="expense-yearwise-reports.php">
                        <span class="fa fa-arrow-right">&nbsp;</span> Chi Tiêu Theo Năm
                    </a></li>

            </ul>
        </li>





        <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em> Hồ Sơ Cá Nhân </a></li>
        <li><a href="change-password.php"><em class="fa fa-clone">&nbsp;</em> Đổi Mật Khẩu </a></li>
        <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng Xuất </a></li>

    </ul>
</div>