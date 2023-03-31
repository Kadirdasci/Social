<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
            ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> MKD SOSYAL</title>
    <link rel="stylesheet" href="navbar.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-meta icon'></i>
        <div class="logo_name">MKD SOSYAL</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
          <div class="search1">
        <input type="text" placeholder="İsim giriniz...">
      </div>
      </li>
      <li>
      <div class="users-list1" style="color: white;">

      </div>
      </li>
    </form>
      <li>
        <a href="a.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Ana Sayfa</span>
        </a>
         <span class="tooltip">Ana Sayfa</span>
      </li>
      <li>
       <a href="newPost.php" >
       <i class='bx bx-message-square-add'></i>
         <span class="links_name">Gönderi Paylaş</span>
       </a>
       <span class="tooltip">Gönderi Paylaş</span>
     </li>
      <li>
       <a href="friends.php">
       <i class='bx bx-group'></i>
         <span class="links_name">Arkadaşlar</span>
       </a>
       <span class="tooltip">Arkadaşlar</span>
     </li>
     <li>
       <a href="users.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Mesajlar</span>
       </a>
       <span class="tooltip">Mesajlar</span>
     </li>
     <li>
       <a href="profile.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Profil</span>
       </a>
       <span class="tooltip">Profil</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Ayarlar</span>
       </a>
       <span class="tooltip">Ayarlar</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="php/images/<?php echo $row['img']; ?>" alt="">
           <div class="name_job">
             <div class="name"><?php echo $row['fname']. " " . $row['lname'] ?></div>
             <div class="job"><?php echo $row['situation']; ?></div>
           </div>
         </div>
         <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" style="display: contents;"> <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>




  <script src="javascript/search.js"></script>
  <script >
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
    }

  </script>
<script>

if ( window.history.replaceState ) {

window.history.replaceState( null, null, window.location.href );

}

</script>

</body>
</html>
                     