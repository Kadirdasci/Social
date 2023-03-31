<?php include_once "b.php"; ?>    
<body>
<section class="home-section">
<head>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<div class="container" style="margin-top:140px ;">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">          
                <div class="profile-img">
                        <img src="php/images/<?php echo $row['img']; ?>" style="bottom: 15px;box-shadow: none;display: block;left: 15px;padding: 1px;position: absolute;height: 160px;width: 160px;background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;z-index: 9; 
                        border-radius: 50%!important;"alt="" title="">        
                </div>
                <div class="profile-name" style="color:#212529;">
                    <h2><?php echo $row['fname']. " " . $row['lname'] ?></h2>
                    <h5><?php echo $row['situation']; ?></h5>
                </div>
                <div class="fb-profile-block-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="profile.php">Gönderiler</a></li>
                            <li><a href="resume.php">Hakkında</a></li>
                            <li><a href="gallery.php">Galeri</a></li>
                            <li><a href="bookmark.php">Kaydedilenler</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top:10px;">
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM resume WHERE cv_member_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row2 = mysqli_fetch_assoc($sql);
            }
            ?>
<?php            
								if ( isset($row2['cv_member_id']) )
									{ ?>

<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card-box text-center">
            <img src="php/images/<?php echo $row['img']; ?>" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

            <h4 class="mb-0"><?php echo $row['fname']. " " . $row['lname'] ?></h4>
            <p class="text-muted"><?php echo $row['situation']; ?></p>
            <div class="text-left mt-3">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM resume WHERE cv_member_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row1 = mysqli_fetch_assoc($sql);
            }
            ?>
                <p class="text-muted font-13 mb-3"><?php echo $row1['cv_about_me']; ?></p>
                <p class="text-muted mb-2 font-13"><i class="mdi mdi-email mr-1"></i><span class="ml-2 "><?php echo $row['email']; ?></span></p>
                <p class="text-muted mb-1 font-13"><i class="mdi mdi-map-marker mr-1"></i><span class="ml-2"><?php echo $row1['location']; ?></span></p>
                <p class="text-muted mb-1 font-13"><i class="mdi mdi-cake-variant mr-1"></i><span class="ml-2"><?php echo $row1['birth_day']; ?></a></span></p>
            </div>
        </div> 

        <div class="card-box">
            <h4 class="header-title" style="margin-bottom: 20px;">Yetenekler</h4>
            <?php
            $query = (mysqli_query($conn, "SELECT * FROM skills WHERE skills_member_id = {$_SESSION['unique_id']} "));
							while($row=mysqli_fetch_array($query)){
							
					?>
            <div class="pt-1" style="padding-bottom: 7px;">
                <h6 class="text-uppercase mt-0"><?php echo $row['skills_name']; ?><span class="float-right"><?php echo $row['skills_point']; ?>%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row['skills_point']; ?>%">
                        <span class="sr-only"><?php echo $row['skills_point']; ?>% Complete</span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div> 

    </div> 

    <div class="col-lg-8 col-xl-8">
        <div class="card-box">
            <div class="tab-content">
                <div class="tab-pane show active" > <!-- EĞİTİM VE DENEYİM ALANI -->

                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                        DENEYİM</h5>

                    <ul class="list-unstyled timeline-sm">
                    <?php
                    $query = (mysqli_query($conn, "SELECT * FROM work WHERE work_member_id = {$_SESSION['unique_id']} ORDER BY work_start "));
							while($row=mysqli_fetch_array($query)){
							
					?>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date"><?php echo $row['work_start']. " - " . $row['work_finish'] ?></span>
                            <h5 class="mt-0 mb-1"><?php echo $row['work_name']; ?></h5>
                            <p><?php echo $row['work_section']; ?></p>
                            <p class="text-muted mt-2"><?php echo $row['work_about']; ?></p>
                        </li>
                        <?php } ?>
                    </ul>


                    <h5 class="mb-4 text-uppercase" style="padding-top: 10px;"><i class="mdi mdi-school mr-1"></i>
                        EĞİTİM</h5>

                    <ul class="list-unstyled timeline-sm">
                    <?php
                    $query = (mysqli_query($conn, "SELECT * FROM education WHERE education_member_id = {$_SESSION['unique_id']} ORDER BY education_start "));
							while($row=mysqli_fetch_array($query)){
							
					?>
                        <li class="timeline-sm-item">
                            <span class="timeline-sm-date"><?php echo $row['education_start']. " - " . $row['education_finish'] ?></span>
                            <h5 class="mt-0 mb-1"><?php echo $row['education_name']; ?></h5>
                            <p><?php echo $row['education_section']; ?></p>
                        </li> 
                        <?php } ?>
                    </ul>

                </div>
            </div> 
        </div> 
    </div> 
</div>
</div>
<?php }
								else
									{
									echo "<span style='display: flex;justify-content: center; COLOR:#212529;' >ÖZGEÇMİŞİNİZİ AYARLAR SEKMESİNDEN GİRDİKTEN SONRA BURADA GÖZÜKECEKTİR.</span>";
									}
							?>
<style type="text/css">

    .fb-profile-block {
    margin: auto;
    position: relative;
    width: 100%;
    }

    .fb-profile-block-thumb{
    display: block;
    height: 315px;
    overflow: hidden;
    position: relative;
    text-decoration: none;
    }
    .fb-profile-block-menu {
    border: 1px solid #d3d6db;
    border-radius: 0 0 3px 3px;
    }
    .profile-img a{
        bottom: 15px;
        box-shadow: none;
        display: block;
        left: 15px;
        padding:1px;
        position: absolute;
        height: 160px;
        width: 160px;
        background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;
        z-index:9;
    }
    .profile-img img {
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.07);
    height:158px;
    padding: 5px;
    width:158px;
    }
    .profile-name {
    bottom: 60px;
    left: 200px;
    position: absolute;
    }
    .profile-name h2 {
    
    font-size: 24px;
    font-weight: 600;
    line-height: 30px;
    max-width: 275px;
    position: relative;
    
    }
    .fb-profile-block-menu{
    height: 44px;
    position: relative;
    width:100%;
    overflow:hidden;
    }
    .block-menu {
    clear: right;
    padding-left: 198px;
    }
    .block-menu ul{
        margin:0;
        padding:0;
    }
    .block-menu ul li{
        display:inline-block;
    }
    .block-menu ul li a {
    border-right: 1px solid #e9eaed;
    float: left;
    font-size: 14px;
    font-weight: bold;
    height: 42px;
    line-height: 3.0;
    padding: 0 17px;
    position: relative;
    vertical-align: middle;
    white-space: nowrap;
    color:#4b4f56;
    text-transform:capitalize;
    }
    .block-menu ul li:first-child a{
    border-left: 1px solid #e9eaed;
    }

    body{
        color: #6c757d;
        background-color:  #f7f7f7;;
        margin-top:20px;
    }
    .card-box {
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e7eaed;
        padding: 1.5rem;
        margin-bottom: 24px;
        border-radius: .25rem;
    }
    .avatar-xl {
        height: 10rem;
        width: 10rem;
    }
    .rounded-circle {
        border-radius: 50%!important;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #1abc9c;
    }
    .nav-pills .nav-link {
        border-radius: .25rem;
    }
    .navtab-bg li>a {
        background-color: #f7f7f7;
        margin: 0 5px;
    }
    .nav-pills>li>a, .nav-tabs>li>a {
        color: #6c757d;
        font-weight: 600;
    }
    .mb-4, .my-4 {
        margin-bottom: 2.25rem!important;
    }
    .tab-content {
        padding: 20px 0 0 0;
    }
    .progress-sm {
        height: 5px;
    }
    .m-0 {
        margin: 0!important;
    }
    .table .thead-light th {
        color: #6c757d;
        background-color: #f1f5f7;
        border-color: #dee2e6;
    }
    .social-list-item {
        height: 2rem;
        width: 2rem;
        line-height: calc(2rem - 4px);
        display: block;
        border: 2px solid #adb5bd;
        border-radius: 50%;
        color: #adb5bd;
    }

    .text-purple {
        color: #6559cc!important;
    }
    .border-purple {
        border-color: #6559cc!important;
    }

    .timeline {
        margin-bottom: 50px;
        position: relative;
    }
    .timeline:before {
        background-color: #dee2e6;
        bottom: 0;
        content: "";
        left: 50%;
        position: absolute;
        top: 30px;
        width: 2px;
        z-index: 0;
    }
    .timeline .time-show {
        margin-bottom: 30px;
        margin-top: 30px;
        position: relative;
    }
    .timeline .timeline-box {
        background: #fff;
        display: block;
        margin: 15px 0;
        position: relative;
        padding: 20px;
    }
    .timeline .timeline-album {
        margin-top: 12px;
    }
    .timeline .timeline-album a {
        display: inline-block;
        margin-right: 5px;
    }
    .timeline .timeline-album img {
        height: 36px;
        width: auto;
        border-radius: 3px;
    }
    @media (min-width: 768px) {
        .timeline .time-show {
            margin-right: -69px;
            text-align: right;
        }
        .timeline .timeline-box {
            margin-left: 45px;
        }
        .timeline .timeline-icon {
            background: #dee2e6;
            border-radius: 50%;
            display: block;
            height: 20px;
            left: -54px;
            margin-top: -10px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 20px;
        }
        .timeline .timeline-icon i {
            color: #98a6ad;
            font-size: 13px;
            position: absolute;
            left: 4px;
        }
        .timeline .timeline-desk {
            display: table-cell;
            vertical-align: top;
            width: 50%;
        }
        .timeline-item {
            display: table-row;
        }
        .timeline-item:before {
            content: "";
            display: block;
            width: 50%;
        }
        .timeline-item .timeline-desk .arrow {
            border-bottom: 12px solid transparent;
            border-right: 12px solid #fff !important;
            border-top: 12px solid transparent;
            display: block;
            height: 0;
            left: -12px;
            margin-top: -12px;
            position: absolute;
            top: 50%;
            width: 0;
        }
        .timeline-item.timeline-item-left:after {
            content: "";
            display: block;
            width: 50%;
        }
        .timeline-item.timeline-item-left .timeline-desk .arrow-alt {
            border-bottom: 12px solid transparent;
            border-left: 12px solid #fff !important;
            border-top: 12px solid transparent;
            display: block;
            height: 0;
            left: auto;
            margin-top: -12px;
            position: absolute;
            right: -12px;
            top: 50%;
            width: 0;
        }
        .timeline-item.timeline-item-left .timeline-desk .album {
            float: right;
            margin-top: 20px;
        }
        .timeline-item.timeline-item-left .timeline-desk .album a {
            float: right;
            margin-left: 5px;
        }
        .timeline-item.timeline-item-left .timeline-icon {
            left: auto;
            right: -56px;
        }
        .timeline-item.timeline-item-left:before {
            display: none;
        }
        .timeline-item.timeline-item-left .timeline-box {
            margin-right: 45px;
            margin-left: 0;
            text-align: right;
        }
    }
    @media (max-width: 767.98px) {
        .timeline .time-show {
            text-align: center;
            position: relative;
        }
        .timeline .timeline-icon {
            display: none;
        }
    }
    .timeline-sm {
        padding-left: 110px;
    }
    .timeline-sm .timeline-sm-item {
        position: relative;
        padding-bottom: 20px;
        padding-left: 40px;
        border-left: 2px solid #dee2e6;
    }
    .timeline-sm .timeline-sm-item:after {
        content: "";
        display: block;
        position: absolute;
        top: 3px;
        left: -7px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #1abc9c;
    }
    .timeline-sm .timeline-sm-item .timeline-sm-date {
        position: absolute;
        left: -104px;
    }
    @media (max-width: 420px) {
        .timeline-sm {
            padding-left: 0;
        }
        .timeline-sm .timeline-sm-date {
            position: relative !important;
            display: block;
            left: 0 !important;
            margin-bottom: 10px;
        }
    }
</style>

<script type="text/javascript">

</script>

</section>
</body>