
<?php include_once "b.php"; ?>        
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body >
<section class="home-section">
<div class="container">
<div class="row el-element-overlay" style="margin-top: 20px; justify-content: center;" >
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM friends WHERE friends_member_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row2 = mysqli_fetch_assoc($sql);
            }
            ?>
<?php            
								if ( isset($row2['friends_member_id']) )
									{ ?>
<?php            
              $query = (mysqli_query($conn, "SELECT * FROM friends INNER JOIN users ON friends.person_id=users.unique_id WHERE friends_member_id ={$_SESSION['unique_id']} ;"));
							while($row=mysqli_fetch_array($query)){
							$id=$row['unique_id'];
					?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card" style="justify-content: space-around;flex-direction: row;">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1" style="border-radius: 50%!important;height: 220px;width: 220px;"> <img style="border-radius: 50%!important;height: 220px;width: 220px;" src="php/images/<?php echo $row['img']; ?>" alt="user">
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="profileuser.php?user_id=<?php echo $id ?>"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="chat.php?user_id=<?php echo $id ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        <h4 class="m-b-0"><?php echo $row['fname']. " " . $row['lname'] ?></h4> <span class="text-muted"><?php echo $row['situation']; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?><?php }
								else
									{
									echo "<span style='display: flex;justify-content: center;margin-top: 10px;flex-direction: column;align-items: center;' >TAKİP ETTİĞİNİZ KİŞİLER BURDA GÖZÜKECEKTİR.<span>HEMEN YENİ İNSANLARI TAKİP EDİN.</span></span>";
									}
							?>

    </div>
</div>
           
</section>
<style type="text/css">
    body{
        margin-top:20px;
        background: #f7f7f7;
    }
    .card {
        margin-bottom: 20px;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 0;
    }
    .el-element-overlay .white-box {
        padding: 0
    }
    
    .el-element-overlay .el-card-item {
        position: relative;
        padding-bottom: 20px
    }
    
    .el-element-overlay .el-card-item .el-card-avatar {
        margin-bottom: 20px
    }
    
    .el-element-overlay .el-card-item .el-card-content {
        text-align: center
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 {
        width: 100%;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 img {
        display: block;
        position: relative;
        -webkit-transition: all .4s linear;
        transition: all .4s linear;
        width: 100%;
        height: auto
    }
    
  
    
    .el-element-overlay .el-card-item .el-overlay-1 .el-info {
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        background-color: transparent;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        padding: 0;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%) translateZ(0);
        -webkit-transform: translateY(-50%) translateZ(0);
        -ms-transform: translateY(-50%) translateZ(0)
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item {
        list-style: none;
        display: inline-block;
        margin: 0 3px
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item .el-link {
        border-color: #fff;
        color: #fff;
        padding: 12px 15px 10px
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 .el-info .el-item .el-link:hover {
        background: #2962FF;
        border-color: #2962FF
    }
    
    .gmaps-overlay_arrow.above,
    .gmaps-overlay_arrow.below {
        border-left: 16px solid transparent;
        border-right: 16px solid transparent
    }
    
    .el-element-overlay .el-card-item .el-overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        top: 0;
        left: 0;
        opacity: 0;
        background-color: rgba(0, 0, 0, .7);
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }
    
    .el-element-overlay .el-card-item .el-overlay-1:hover .el-overlay {
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0)
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 .scrl-dwn {
        top: -100%
    }
    
    .el-element-overlay .el-card-item .el-overlay-1 .scrl-up {
        top: 100%;
        height: 0
    }
    
    .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-dwn {
        top: 0
    }
    
    .el-element-overlay .el-card-item .el-overlay-1:hover .scrl-up {
        top: 0;
        height: 100%
    }
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
       
</body>

</html>