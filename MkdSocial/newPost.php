<?php include_once "b.php"; ?> 
<body style="background: #f7f7f7;">
    

<form id="form" action="" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="unique_id" value="<?php echo $row['unique_id']; ?>">
  <div class="popup-outer" style="position: absolute;display: flex;align-items: center;justify-content: center;width: 100%; margin-top: 50px;">
            <div class="popup-box" style="position: relative;padding: 30px;max-width: 380px;width: 100%;background: #fff;border-radius: 12px;">
                <div class="profile-text" style="display: flex;align-items: center;">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="" style="height: 60px;width: 60px;object-fit: cover;border-radius: 50%;"> 
                        <div class="text" style="display: flex;flex-direction: column;margin-left: 15px;">
                            <span class="name" style="font-size: 14px;font-weight: 400;"><?php echo $row['fname']. " " . $row['lname'] ?></span>
                             <span class="profession" style="font-size: 12px;font-weight: 500;"><?php echo $row['situation']; ?></span>
                        </div>
                        
                </div>
                        <textarea type="text"  name="post_text" spellcheck="false" placeholder="Enter your message" style="min-height: 140px;width: 100%;margin-top: 20px;outline: none;border: 1px solid #ddd;padding: 12px;border-radius: 6px;resize: none;font-size: 14px;font-weight: 400;background: #f3f3f3;"></textarea>
                        <div class="button" style="display: flex;justify-content: flex-end;margin-top: 15px;">
                        
                          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
                          <button type="submit" name="submit" class="close1" style="outline: none;border: none;padding: 6px 12px;border-radius: 6px;background: #6f93f6;margin-left: 8px;color: #fff;font-size: 14px;cursor: pointer;transition: all 0.3s ea">Paylaş</button>
                          
                        </div>
            </div>
        </div>
  </form>
</body>
  <?php
    if (isset($_POST['submit']) || isset($_FILES["fileImg"]["name"])) {
      $id = $_POST["unique_id"];
      $post_text = $_POST['post_text'];
      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = $_FILES["fileImg"]["name"];
      $target = "php/images/" . $imageName;
      move_uploaded_file($src, $target);

     

      if ( isset($imageName) == $imageName )
      { 
        $query = "INSERT INTO post (post_member_id, post_text, post_img, created_date) VALUES ({$id}, '{$post_text}', '{$imageName}' , NOW())";
        mysqli_query($conn, $query);
      }
    else
      {
        $query = "INSERT INTO post (post_member_id, post_text, post_img, created_date) VALUES ({$id}, '{$post_text}','{$imageName}' OR NULL , NOW())";
        mysqli_query($conn, $query);
      }
      echo "<span style='position: absolute;display: flex;align-items: center;justify-content: center;width: 100%; ' >Gönderiniz başarıyla paylaşıldı.</span>";
    }
  ?>