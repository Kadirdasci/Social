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
        <div class="row">
        <?php            
              $query = (mysqli_query($conn, "SELECT * FROM post INNER JOIN users ON post.post_member_id=users.unique_id
			  													 WHERE post_member_id={$_SESSION['unique_id']} ORDER BY post.created_date DESC "));
							while($row=mysqli_fetch_array($query)){
							$id=$row['unique_id'];
					?>

          
          <div class="col-lg-4" style="padding-top: 10px;">
            <div class="post-block" style="padding-bottom: 0px;">
              <div class="d-flex justify-content-between">
                <div class="d-flex mb-3">
                  <div class="mr-2">
                    <a href="#!" class="text-dark"><img src="php/images/<?php echo $row['img']; ?>" alt="User" class="author-img"></a>
                  </div>
                  <div>
                    <h5 class="mb-0"><?php echo $row['fname']. " " . $row['lname'] ?></h5>
                    <p class="mb-0 text-muted"><?php echo $row['created_date']; ?></p>
                  </div>
                </div>
              </div>
              <div class="post-block__content mb-2" style="display: flex;flex-direction: column;justify-content: center";>
                <p ><?php echo $row['post_text']; ?></p>
                <?php            
								if ( isset($row['post_img']) )
									{ ?>
										<img src="php/images/<?php echo $row['post_img']; ?>" alt="Content img"> 
									<?php }
								else
									{
									echo "";
									}
							?>
              </div>
              <div class="mb-3" style="display: flex; justify-content: space-between;">
                <div class="d-flex justify-content-between mb-2">
                  <div class="d-flex">
                  <?php echo "<p style='font-size:15px; '><a style='cursor:pointer' onclick=likeTweet('".$row['post_member_id']."','".$row['post_id']."','".$row['likes']."') name='like' style='color:black; '><span href='#!' class='text-danger mr-2'><span><i class='fa fa-heart'></i></span></span></span></a><span id='num_like".$row['post_id']."'>".$row['likes']."</p>" ?>

                  </div>
                </div>
                <div>
                      
                      <?php  


                              $sql = mysqli_query($conn, "SELECT * FROM bookmark INNER JOIN post ON post.post_id=bookmark.bookmark_post_id
                      WHERE bookmark_post_id = {$row['post_id']} AND bookmark_member_id ={$_SESSION['unique_id']} ");
                              if(mysqli_num_rows($sql) > 0){
                                $row14 = mysqli_fetch_assoc($sql);

                                        
                                
                                    ?>
                                
                          <button style="border: none;background: none;"  type="submit1" name="submit1"   ><i class="fa fa-bookmark" aria-hidden="true"></i></button>

                          <?php 
                          }
                            else
                              { ?>
                      <button style="border: none;background: none;"  type="submit" name="submit"  ><i class="fa fa-bookmark-o" aria-hidden="true"></i></button>
                      <?php		        
                                
                              }
                                ?>




</div>
              </div>
            </div>
          </div>
          
          <?php } ?>
        </div>
      </div>
      <?php }
								else
									{
									echo "<span style='display: flex;justify-content: center;margin-top: 10px;' >HEMEN YENİ BİR GÖNDERİ OLUŞTURUN.</span>";
									}
							?>
  </section>


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
  <script>
            function likeTweet(tweetName,tweetId,tweetlikes){
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("num_like"+tweetId).innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","post_Like.php?q="+tweetName+"&p="+tweetId+"&l="+tweetlikes,false);
                xmlhttp.send();
            }
        </script>
</body>
</html>