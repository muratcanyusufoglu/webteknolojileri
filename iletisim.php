<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        
	<main>

		<div class="container">
			
			<form action="iletisimdondur.html" name="Form" onsubmit="return control()">

				<div class="form-group">
					<label for="name">İsim</label>
					<input type="text" name="name" class="form-control" placeholder="İsminizi Giriniz">							
					<small class="form-text text-muted">Doldurulması Zorunlu</small>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Mail Adresini Giriniz">
					<small class="form-text text-muted">Doldurulması Zorunlu</small>
				</div>

				<div class="form-group">
					<label for="message">Mesaj</label>
					<textarea name="message" id="message" rows="5" class="form-control"></textarea>
				</div>

				<button class="btn btn-info" type="reset" id="submit" name="submit" value="Reset" onclick="check()">Temizle</button>

				<button class="btn btn btn-info" type="submit" id="sub">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
		function control()
		{
			var x = document.forms["Form"]["name"].value;
			if (x == "") 
			{
				alert("İsim boş bırakılamaz");
				return false;
			}

			var y = document.forms["Form"]["email"].value;
			if (y == "") 
			{
				alert("Mail Boş Bırakılamaz");
				return false;
			}

			var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
			if (forMail.test(y) == false) 
			{
				alert("Geçersiz Mail Adresi.Tekrar Deneyin!");
				return false;
			}


		}	

    </script>	

	

</body>

</html>