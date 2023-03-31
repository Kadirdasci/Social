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
<form id="form" action="" method="post" enctype="multipart/form-data" >
<input type="hidden" name="bookmark_member_id" value="<?php echo $row['unique_id']; ?>">
<div class="container">

            <?php            
              $query = (mysqli_query($conn, "SELECT * FROM post INNER JOIN users ON post.post_member_id=users.unique_id
			  													 ORDER BY post.created_date DESC;"));
							while($row=mysqli_fetch_array($query)){
							$id=$row['unique_id'];
							
					?>
			<div class="row">
				<div class="col-sm-6 offset-sm-3" style="padding-top: 10px;">
					<div class="post-block" style="padding-bottom: 0px;">
						<div class="d-flex justify-content-between">
							<div class="d-flex mb-3">
								<div class="mr-2">
									<a href="#!" class="text-dark"><img src="php/images/<?php echo $row['img']; ?>" alt="User" class="author-img"></a>
								</div>
								<div>
									<h5 class="mb-0"><a href="#!" class="text-dark"><?php echo $row['fname']. " " . $row['lname'] ?></a></h5>
									<p class="mb-0 text-muted"><?php echo $row['created_date']; ?></p>
								</div>
							</div>
							
							
						</div>
						<div class="post-block__content mb-2">
							<p><?php echo $row['post_text']; ?></p>
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



							 <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>"> 
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
			</div>
			<?php } ?>
		</div>

</section>
</form>
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

<?php 

                    if (isset($_POST['submit1'])) {
                      $id = $_POST["bookmark_member_id"];
                      $bookmark_id = $_POST['post_id'];
                  
                      $query = "DELETE FROM bookmark WHERE bookmark_member_id = $id AND bookmark_post_id=$bookmark_id";
                      mysqli_query($conn, $query);
                    }
					if (isset($_POST['submit'])) {
						$id = $_POST["bookmark_member_id"];
						$bookmark_id = $_POST['post_id'];
					
						$query = "INSERT INTO bookmark (bookmark_member_id, bookmark_post_id) VALUES ({$id}, {$bookmark_id})";
						mysqli_query($conn, $query);        
					  };
?>  