
<?php include_once "b.php"; ?>
<?php include_once "header.php"; ?>
<style>
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  }

  .title {
  color: grey;
  font-size: 18px;
  padding-bottom: 10px
  }
  /* The Modal (background) */
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.3); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  width: 35%;
  }

  /* The Close Button */
  .close {
  color: #aaaaaa78;
  float: right;
  font-size: 28px;
  font-weight: bold;
  }

  .close:hover,
  .close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  }

</style>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
       
       <a href="profileuser.php?user_id=<?php echo $user_id ?>"><button style="margin-left: 185px;color: black;background-color: white;border: none;padding: unset;"><i class="fa fa-user" aria-hidden="true"></i></button></a>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input  style="width: 333px;" data-emoji-picker="true" type="text" name="message" class="input-field" placeholder="Mesaj yazın..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>


  
  




  <?php

$outgoing_id = $_SESSION['unique_id'];
$sql = "UPDATE messages SET status='1' WHERE incoming_msg_id={$outgoing_id} AND outgoing_msg_id={$row['unique_id']}";
$res = mysqli_query($conn, $sql);


?>
  <script src="javascript/chat.js"></script>
  <script src="src/emojiPicker.js"></script>
  <script>
    (() => {
      new EmojiPicker()
    })()
  </script>






</body>
</html>

