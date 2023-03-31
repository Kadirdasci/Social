<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: a.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>MKD SOSYAL</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Mail Adresi</label>
          <input type="text" name="email" placeholder="Mail Adresinizi Giriniz" required>
        </div>
        <div class="field input">
          <label>Şifre</label>
          <input type="password" name="password" placeholder="Şifrenizi Giriniz" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Giriş">
        </div>
      </form>
      <div class="link">Henüz kaydolmadınız mı? <a href="index.php">Şimdi kaydolun</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
