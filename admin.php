<html>
<head>

    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

    </head>
    
    <body>
    
    <section id "nav-bar">
        
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Web Teknolojileri</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Hakkimda </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ozgecmis.html">Özgeçmis</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="sehrim.html"> Sehrim</a>
      
        </li>
    <li class="nav-item">
        <a class="nav-link" href="takimim.html" >Takimimiz</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php" >Login</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="iletisim.php" >Iletisim</a>
      </li>
         
    </ul>
  </div>
</nav>
        </section>


<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayi görüntüleme yetkiniz yoktur.";
}else{
echo "             .....G171210081 Hosgeldiniz......<br>";
echo "<a href=index.html>              Ana Sayfaya Don</a>";
}
?>
    </body>
</html>
