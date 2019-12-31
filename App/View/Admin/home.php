<!doctype html>
<html lang="en">

 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="http://localhost/simonsi/public/home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/libs/css/style.css">
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="http://localhost/simonsi/public/home/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
	<script src="http://localhost/simonsi/public/home/assets/vendor/jquery/jquery.min.js"></script>
	<script>
$(document).ready(function(){
  $(".mybtn2").click(function(){
	  let id = $(this).val();
	  alert(id);
  });
});
</script>
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

	        <nav class="navbar navbar-expand-lg bg-white fixed-top">
	            <a class="navbar-brand" href="index.html">Concept</a>
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>
	            <div class="collapse navbar-collapse " id="navbarSupportedContent">
	                <ul class="navbar-nav ml-auto navbar-right-top">
	                    <li class="nav-item">
	                        <div id="custom-search" class="top-search-bar">
	                            <input class="form-control" type="text" placeholder="Search..">
	                        </div>
	                    </li>
	                    <li class="nav-item dropdown notification">
	                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
	                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
	                            <li>
	                                <div class="notification-title"> Notification</div>
	                                <div class="notification-list">
	                                    <div class="list-group">
	                                        <a href="#" class="list-group-item list-group-item-action active">
	                                            <div class="notification-info">
	                                                <div class="notification-list-user-img"><img src="http://localhost/simonsi/public/home/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
	                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
	                                                    <div class="notification-date">2 min ago</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                        <a href="#" class="list-group-item list-group-item-action">
	                                            <div class="notification-info">
	                                                <div class="notification-list-user-img"><img src="http://localhost/simonsi/public/home/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
	                                                <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
	                                                    <div class="notification-date">2 days ago</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                        <a href="#" class="list-group-item list-group-item-action">
	                                            <div class="notification-info">
	                                                <div class="notification-list-user-img"><img src="http://localhost/simonsi/public/home/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
	                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
	                                                    <div class="notification-date">2 min ago</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                        <a href="#" class="list-group-item list-group-item-action">
	                                            <div class="notification-info">
	                                                <div class="notification-list-user-img"><img src="http://localhost/simonsi/public/home/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
	                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
	                                                    <div class="notification-date">2 min ago</div>
	                                                </div>
	                                            </div>
	                                        </a>
	                                    </div>
	                                </div>
	                            </li>
	                            <li>
	                                <div class="list-footer"> <a href="#">View all notifications</a></div>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="nav-item dropdown connection">
	                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
	                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
	                            <li class="connection-list">
	                                <div class="row">
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/github.png" alt="" > <span>Github</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
	                                    </div>
	                                </div>
	                                <div class="row">
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
	                                    </div>
	                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
	                                        <a href="#" class="connection-item"><img src="http://localhost/simonsi/public/home/assets/images/slack.png" alt="" > <span>Slack</span></a>
	                                    </div>
	                                </div>
	                            </li>
	                            <li>
	                                <div class="conntection-footer"><a href="#">More</a></div>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="nav-item dropdown nav-user">
	                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://localhost/simonsi/public/home/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
	                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
	                            <div class="nav-user-info">
	                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
	                                <span class="status"></span><span class="ml-2">Available</span>
	                            </div>
	                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
	                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
	                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	        </nav>
	    </div>

	    <div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2" id="mb-2">Infulencer Dashboard Template </h3>
	                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page">Influencer Dashboard Template</li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- ============================================================== -->
	                <!-- end pageheader  -->
	                <!-- ============================================================== -->
	                <!-- ============================================================== -->
	                <!-- content  -->
	                <!-- ============================================================== -->
	                <!-- ============================================================== -->
	                <!-- influencer profile  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="card influencer-profile-data">
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
	                                        <div class="text-center">
	                                            <img src="http://localhost/simonsi/public/home/assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
	                                            <div class="user-avatar-info">
	                                                <div class="m-b-20">
	                                                    <div class="user-avatar-name">
	                                                        <h2 class="mb-1"><?php echo $_SESSION['name'];  ?></h2>
	                                                    </div>
	                                                    <div class="rating-star  d-inline-block">
	                                                        
	                                                    </div>
	                                                </div>
	                                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
	                                                <div class="user-avatar-address">
	                                                    <p class="border-bottom pb-3">
	                                                        <span class="d-xl-inline-block d-block mb-2"><?php echo $_SESSION['n_induk'] ?></span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><?php echo $_SESSION['prodi'] ?> </span>
	                                                        <!-- <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male  -->
	                                                                </span>
	                                                        <!-- <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span> -->
	                                                    </p>
	                                                    <div class="mt-3">
	                                                        <!-- <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a> -->
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="border-top user-social-box">
	                                    <!-- <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color"> <i class="fab fa-twitter-square"></i></span><span>13,291</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> <i class="fab fa-pinterest-square"></i></span><span>84,019</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> <i class="fab fa-instagram"></i></span><span>12,300</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> <i class="fab fa-facebook-square "></i></span><span>92,920</span></div>
	                                    <div class="user-social-media d-xl-inline-block "><span class="mr-2 medium-color"> <i class="fab fa-medium"></i></span><span>291</span></div>
	                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 youtube-color"> <i class="fab fa-youtube"></i></span><span>1291</span></div> -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	        
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- four widgets   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total views   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end total views   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total followers   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end total followers   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- partnerships   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end partnerships   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- total earned   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end total earned   -->
	                        <!-- ============================================================== -->
	                    </div>
	                    <!-- ============================================================== -->
	                    <!-- end widgets   -->
	                    <!-- ============================================================== -->
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- followers by gender   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end followers by gender  -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- followers by age   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end followers by age   -->
	                        <!-- ============================================================== -->
	                        <!-- ============================================================== -->
	                        <!-- followers by locations   -->
	                        <!-- ============================================================== -->
	                        
	                        <!-- ============================================================== -->
	                        <!-- end followers by locations  -->
	                        <!-- ============================================================== -->
	                    </div>
	                    <div class="row">
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Fakultas</h3>
									<a href="index.php?simonsi=addfakultas" class="btn btn-success">+ fakultas</a>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
	                                                <th class="border-0">Nama</th>
	                                                <th class="border-0">Opsi</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($prodi as $prod) {
	                                            ?>
												<tr>
													<td> <?php echo $prod['name']; ?> </td>
													<?php
													?>
	                                                <td><a class="btn btn-success btn-xs" href="#">edit</a> 
													<a class="btn btn-danger btn-xs " href="#" >hapus</a>
													<button value="<?php echo $prod['id']; ?>"  class="btn btn-danger btn-xs mybtn2" href="#">data dosen</button>
													 </td>
	                                                </td>
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						

						<div class="row" >
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Dosen</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
	                                                <th class="border-0">NID</th>
													<th class="border-0">Nama</th>
													<th class="border-0">Email</th>
													<th class="border-0">Fakultas</th>
	                                                <th class="border-0">Opsi</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($dosens as $dosen) {
	                                            ?>
												<tr>
													<td> <?php echo $dosen['n_induk']; ?> </td>
													<td> <?php echo $dosen['name']; ?> </td>
													<td> <?php echo $dosen['email']; ?> </td>
													<td> <?php foreach ($prodi as $prod) {
														if ($prod['id'] == $dosen['prodi_id']) {
															echo $prod['name'];
														}
													} ?> </td>
													<?php
													?>
	                                                <td><a class="btn btn-success btn-xs" href="http://">edit</a> 
													<a class="btn btn-danger btn-xs" href="http://">hapus</a>
													 </td>
	                                                </td>
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						<div class="row" >
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Mahasiswa</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
	                                                <th class="border-0">NID</th>
													<th class="border-0">Nama</th>
													<th class="border-0">Email</th>
													<th class="border-0">Fakultas</th>
	                                                <th class="border-0">Opsi</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($mahasiswas as $mahasiwa) {
	                                            ?>
												<tr>
													<td> <?php echo $mahasiwa['n_induk']; ?> </td>
													<td> <?php echo $mahasiwa['name']; ?> </td>
													<td> <?php echo $mahasiwa['email']; ?> </td>
													<td> <?php foreach ($prodi as $prod) {
														if ($prod['id'] == $mahasiwa['prodi_id']) {
															echo $prod['name'];
														}
													} ?> </td>
													<?php
													?>
	                                                <td><a class="btn btn-success btn-xs" href="http://">edit</a> 
													<a class="btn btn-danger btn-xs" href="http://">hapus</a>
													 </td>
	                                                </td>
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						
						<div class="row" >
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Mata Kuliah</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
													<th class="border-0">Nama</th>
													<th class="border-0">Fakultas</th>
													<th class="border-0">Tahun Ajar</th>
	                                                <th class="border-0">Opsi</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($matkuls as $matkul) {
	                                            ?>
												<tr>
													<td> <?php echo $matkul['name']; ?> </td>
													<td> <?php foreach ($prodi as $prod) {
														if ($prod['id'] == $matkul['prodi_id']) {
															echo $prod['name'];
														}
													} ?> </td>
													<td> <?php foreach ($tahun_akas as $tahun_aka) {
														if ($matkul['thn_id'] == $tahun_aka['id']) {
															echo $tahun_aka['name'];
														}
													} ?> </td>
													<?php
													?>
	                                                <td><a class="btn btn-success btn-xs" href="http://">edit</a> 
													<a class="btn btn-danger btn-xs" href="http://">hapus</a>
													 </td>
	                                                </td>
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						<div class="row" >
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Tahun Akademik</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
													<th class="border-0">Nama</th>
													<th class="border-0">Status</th>
	                                                <th class="border-0">Opsi</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($tahun_akas as $tahun_aka) {
	                                            ?>
												<tr>
													<td> <?php echo $tahun_aka['name']; ?> </td>
													<td> <?php if ($tahun_aka['status'] == 1) {
														echo "aktif";
													}else {
														echo "tidak aktif";
													}  ?> </td>
	                                                <td><a class="btn btn-success btn-xs" href="http://">edit</a> 
													<a class="btn btn-danger btn-xs" href="http://">hapus</a>
													 </td>
	                                                </td>
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						<div class="row" >
	                        <!-- ============================================================== -->
	                        <!-- campaign activities   -->
	                        <!-- ============================================================== -->
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Data Penilaian Pembelajaran</h3>
	                            </div>
	                            <div class="card">
	                                <div class="campaign-table table-responsive">
	                                    <table class="table">
	                                        <thead>
	                                            <tr class="border-0">
													<th class="border-0">Nama Dosen</th>
													<th class="border-0">Nama Mahasiswa</th>
	                                                <th class="border-0">Fakuktas</th>
													<th class="border-0">Tgl Nilai</th>
													<th class="border-0">Soal 1</th>
													<th class="border-0">Soal 2</th>
													<th class="border-0">Soal 3</th>
													<th class="border-0">Saran</th>
	                                                <!-- <th class="border-0">Social Platform</th>
	                                                <th class="border-0">Min / Max Views</th>
	                                                <th class="border-0">Status</th>
	                                                <th class="border-0">Start Date</th>
	                                                <th class="border-0">Action</th> -->
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                                </td>
	                                            </tr>
												<?php foreach ($penilaians as $penilaian) {
	                                            ?>
												<tr>
													<td><?php foreach ($dosens as $dosen) {
														if ($dosen['id'] == $penilaian['dosen_id']) {
															echo $dosen['name'];
														}
													} ?></td>
													 <td> <?php foreach ($mahasiswas as $mahasiswa) {
														if ($mahasiswa['id'] == $penilaian['user_id']) {
															echo $mahasiswa['name'];
														}
													} ?> </td> 
													 <td> <?php foreach ($prodi as $prod) {
														if ($prod['id'] == $penilaian['user_id']) {
															echo $prod['name'];
														}
													} ?> </td>
													<td><?php echo $penilaian['tgl_nilai'] ?></td>
	                                                <td><a class="btn btn-success btn-xs" href="http://">edit</a> 
													<a class="btn btn-danger btn-xs" href="http://">hapus</a>
													 </td>
	                                                
												</tr> <?php
											} ?>
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- ============================================================== -->
	                        <!-- end campaign activities   -->
	                        <!-- ============================================================== -->
	                    </div>
						
	                    <!-- ============================================================== -->
	                    <!-- recommended campaigns   -->
	                    <!-- ============================================================== -->
	                    	                    <!-- ============================================================== -->
	                    <!-- end main wrapper  -->
	                    <!-- ============================================================== -->
	                    <!-- Optional JavaScript -->
	                    <!-- jquery 3.3.1 -->
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	                    <!-- bootstap bundle js -->
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	                    <!-- slimscroll js -->
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	                    <!-- main js -->
	                    <script src="http://localhost/simonsi/public/home/assets/libs/js/main-js.js"></script>
	                    <!-- morris-chart js -->
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/charts/morris-bundle/morris.js"></script>
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/charts/morris-bundle/morrisjs.html"></script>
	                    <!-- chart js -->
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
	                    <script src="http://localhost/simonsi/public/home/assets/vendor/charts/charts-bundle/chartjs.js"></script>
	                    <!-- dashboard js -->
	                    <script src="http://localhost/simonsi/public/home/assets/libs/js/dashboard-influencer.js"></script>
</body>
 
</html>