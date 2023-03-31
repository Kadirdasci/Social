<?php include_once "b.php"; ?>    
<body style="background: #f7f7f7;">
<section class="home-section">
<div class="container" style="margin-top:140px ;">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">          
                <div class="profile-img">
                        <img src="php/images/<?php echo $row['img']; ?>" style="bottom: 15px;box-shadow: none;display: block;left: 15px;padding: 1px;position: absolute;height: 160px;width: 160px;background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;z-index: 9; 
                        border-radius: 50%!important;"alt="" title="">        
                </div>
                <div class="profile-name">
                    <h2><?php echo $row['fname']. " " . $row['lname'] ?></h2>
                    <h5 style="font-size: 20px;"><?php echo $row['situation']; ?></h5>
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
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM post WHERE post_member_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row2 = mysqli_fetch_assoc($sql);
            }
            ?>
<?php            
			if ( isset($row2['post_member_id']) )
			{ ?>


<div class="container">
<div class="superbox">
            <?php
            $query = (mysqli_query($conn, "SELECT * FROM post WHERE post_member_id = {$_SESSION['unique_id']} ORDER BY post.created_date DESC; "));
							while($row=mysqli_fetch_array($query)){
							
			?>
	
    <?php            
		if ( isset($row['post_img']) )
			{ ?>
            <div class="superbox-list" style="margin: 5px;">
				<img src="php/images/<?php echo $row['post_img']; ?>"  alt="" class="superbox-img">
                </div>
			<?php }
		else
			{
			
			}
	?>
		
	
	<?php } ?>
</div>
</div>
<?php }
	else
		{
		echo "<span style='display: flex;justify-content: center;margin-top: 10px; font-size:16px; ' >YÜKLEDİĞİNİZ RESİMLER BURADA GÖZÜKECEKTİR.</span>";
		}
?>
  </section>
  <div class="modal fade" id="showPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
      </div>
     
    </div>
  </div>
</div>

<style type="text/css">
    .superbox {
        font-size: 0
    }

    .superbox-list {
        display: inline-block;
        width: 12.5%;
        margin: 0;
        position: relative
    }

    .superbox-list.active:after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        border: 10px solid transparent;
        border-bottom-color: #2d353c;
        margin-left: -10px
    }

    .superbox-show {
        text-align: center;
        position: relative;
        background: #2d353c;
        width: 100%;
        float: left;
        padding: 25px;
        display: none
    }

    .superbox-img {
        max-width: 100%;
        width: 100%;
        cursor: pointer
    }

    .superbox-current-img {
        -webkit-box-shadow: 0 5px 35px rgba(0, 0, 0, .65);
        box-shadow: 0 5px 35px rgba(0, 0, 0, .65);
        max-width: 100%
    }

    .superbox-img:hover {
        opacity: .8
    }

    .superbox-close {
        opacity: .7;
        cursor: pointer;
        position: absolute;
        top: 25px;
        right: 25px;
        background: url(assets/plugins/superbox/img/close.gif) center center no-repeat;
        width: 35px;
        height: 35px
    }
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
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
$(function(){
    $('.superbox-img').click(function(){
        $('#showPhoto .modal-body').html($(this).clone());
        $('#showPhoto').modal('show');
    })
})

</script>
</body>
</html>