<?php include_once "b.php"; ?>   
<?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row1 = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?> 
<body style="background: #f7f7f7;">
<section class="home-section">
<form id="form" action="" method="post" enctype="multipart/form-data" >
<input type="hidden" name="friends_member_id" value="<?php echo $row['unique_id']; ?>">
<input type="hidden" name="person_id" value="<?php echo $row1['unique_id']; ?>">
<div class="container" style="margin-top:140px ;">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-profile-block">          
                <div class="profile-img">
                        <img src="php/images/<?php echo $row1['img']; ?>" style="bottom: 15px;box-shadow: none;display: block;left: 15px;padding: 1px;position: absolute;height: 160px;width: 160px;background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;z-index: 9; 
                        border-radius: 50%!important;"alt="" title="">        
                </div>
                <div class="profile-name">
                  <div style="margin-left: 200px;">
                    <h2><?php echo $row1['fname']. " " . $row1['lname'] ?></h2>
                    <h5><?php echo $row1['situation']; ?></h5>
                  </div>
                    <div>
                    <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM friends WHERE person_id = {$user_id} AND friends_member_id ={$_SESSION['unique_id']} ");
                        if(mysqli_num_rows($sql) > 0){
                         $row14 = mysqli_fetch_assoc($sql);
                        }
                        ?>
                          <?php            
								          if ( isset($row14['person_id']) )
									          { ?>
                    <button  style="margin-right:7px;" type="submit1" name="submit1" class="btn btn-pill-left btn-success"  ><i class='bx bxs-user-plus' ></i> Takip Ediliyor</button>
                    <?php 
                    if (isset($_POST['submit1'])) {
                      $id = $_POST["friends_member_id"];
                      $person_id = $_POST['person_id'];
                  
                      $query = "DELETE FROM `friends` WHERE friends_member_id = $id AND person_id=$person_id";
                      mysqli_query($conn, $query);
                    }}
								      else
									      {
									        echo "<button  style='margin-right:7px;' type='submit' name='submit' class='btn btn-pill-left btn-success'  ><i class='bx bxs-user-plus' ></i> Takip Et</button>";
                          if (isset($_POST['submit'])) {
                            $id = $_POST["friends_member_id"];
                            $person_id = $_POST['person_id'];
                        
                            $query = "INSERT INTO friends (friends_member_id, person_id) VALUES ({$id}, {$person_id})";
                            mysqli_query($conn, $query);        
                          };
									      }
							            ?>
                    
                    <a href="chat.php?user_id=<?php echo $user_id ?>"><button type="button" class="btn btn-pill-right btn-success"><i class='bx bx-envelope'></i> Mesaj</button></a>
                    </div>
                </div>
                
                <div class="fb-profile-block-menu">
                    <div class="block-menu">
                        <ul>
                            <li><a href="profileuser.php?user_id=<?php echo $row1['unique_id'] ?>">Gönderiler</a></li>
                            <li><a href="resumeuser.php?user_id=<?php echo $row1['unique_id'] ?>">Hakkında</a></li>
                            <li><a href="galleryuser.php?user_id=<?php echo $row1['unique_id'] ?>">Galeri</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM post WHERE post_member_id = {$user_id}");
            if(mysqli_num_rows($sql) > 0){
              $row12 = mysqli_fetch_assoc($sql);
            }
            ?>
<?php            
								if ( isset($row12['post_member_id']) )
									{ ?>


  <div class="container">
        <div class="row">
        <?php            
              $query = (mysqli_query($conn, "SELECT * FROM post INNER JOIN users ON post.post_member_id=users.unique_id
			  													 WHERE post_member_id={$user_id} ORDER BY post.created_date DESC "));
							while($row1=mysqli_fetch_array($query)){
							$id=$row1['unique_id'];
					?>

          
          <div class="col-lg-4" style="padding-top: 10px;">
            <div class="post-block" style="padding-bottom: 0px;">
              <div class="d-flex justify-content-between">
                <div class="d-flex mb-3">
                  <div class="mr-2">
                    <a href="#!" class="text-dark"><img src="php/images/<?php echo $row1['img']; ?>" alt="User" class="author-img"></a>
                  </div>
                  <div>
                    <h5 class="mb-0"><?php echo $row1['fname']. " " . $row1['lname'] ?></h5>
                    <p class="mb-0 text-muted"><?php echo $row1['created_date']; ?></p>
                  </div>
                </div>
              </div>
              <div class="post-block__content mb-2" style="display: flex;flex-direction: column;justify-content: center";>
                <p ><?php echo $row1['post_text']; ?></p>
                <?php            
								if ( isset($row1['post_img']) )
									{ ?>
										<img src="php/images/<?php echo $row1['post_img']; ?>" alt="Content img"> 
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
                  <?php echo "<p style='font-size:15px; '><a style='cursor:pointer' onclick=likeTweet('".$row1['post_member_id']."','".$row1['post_id']."','".$row1['likes']."') name='like' style='color:black; '><span href='#!' class='text-danger mr-2'><span><i class='fa fa-heart'></i></span></span></span></a><span id='num_like".$row1['post_id']."'>".$row1['likes']."</p>" ?>

                  </div>
                </div>
                <div>           
                      <?php  
                              $sql = mysqli_query($conn, "SELECT * FROM bookmark INNER JOIN post ON post.post_id=bookmark.bookmark_post_id
                      WHERE bookmark_post_id = {$row1['post_id']} AND bookmark_member_id ={$_SESSION['unique_id']} ");
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
									echo "<span style='display: flex;justify-content: center; margin-top: 10px;' ><b>".$row1['fname']. " " . $row1['lname']. " </b>&nbspHENÜZ BİR PAYLAŞIM YAPMAMIŞTIR.</span>";
									}
							?>


  </section>
                </form>


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
    /* left: 200px; */
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: absolute;
    align-items: flex-end;
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
