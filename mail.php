<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>ilona szczepańska- Studio Piosenki</title>
	<meta name="description" content="ilona szczepańska - Studio Piosenki to miejsce, w którym możesz nauczyć się śpiewać oraz realizować się muzycznie pod okiem doświadczonych wokalistów, bazując na szerokim repertuarze muzyki rozrywkowej.">
	<meta name="keywords" content="Lekcje śpiewu, szkoła wokalna, śpiewanie piosenek, śpiewanie Kraków, warsztaty wokalne">
	<meta name="author" content="Wojciech Szczepański">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|ZCOOL+XiaoWei&amp;subset=latin-ext" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="img/graf2.png" />
</head>

<body>

	<header>
	
		<nav class="navbar navbar-light bg-white navbar-expand-md fixed-top">
		
			<a class="navbar-brand"  href="index.html"><img src="img/graf.png" width="154" height="40"  alt="graf" ></a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse justify-content-center" id="mainmenu" >
			
				<ul class="navbar-nav ">
				
					<li class="nav-item">
						<a class="nav-link" href="index.html"> Studio </a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link" href="oferta.html"> Oferta </a>
					</li>
				
					<li class="nav-item ">
						<a class="nav-link" href="załoga.html"> Załoga </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="eventy.html"> Eventy </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="galeria.html"> Galeria </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="cennik.html"> Cennik </a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="kontakt.html"> Kontakt </a>
					</li>
					<li class="nav-item">
					<a href="https://www.facebook.com/ilonaszczepanskastudiopiosenki/" target="_blank" class="fa fa-facebook"></a>
					</li>
				
				</ul>
			
				
			
			</div>
		
		</nav>
	
	
	
	
	<div id="demo" class="carousel slide" data-ride="carousel" data-interval="5000">

  
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider/slider-img1.png" alt="MBFoto" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="slider/slider-img2.png" alt="MBFoto" width="1100" height="500">
    </div>
	<div class="carousel-item">
      <img src="slider/slider-img3.png" alt="MBFoto" width="1100" height="500">
    </div>
	<div class="carousel-item">
      <img src="slider/slider-img4.png" alt="MBFoto" width="1100" height="500">
    </div>
	<div class="carousel-item">
      <img src="slider/slider-img5.png" alt="MBFoto" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>

<main>
		
	<section class="info">
		
		<div class="container">
				
				<header>
					<br />
					<h1>Zapraszamy do kontaktu:</h1>
					<br />
				</header>
				
				<article>	
					<p>E-mail: kontakt@ilonastudio.pl</p>
					<p>Tel: +48 666 685 606</p>
					
					
					<br />
					<p><b>"Ilona Szczepańska - Studio Piosenki"</b></p>
					<br />
					<p>Firma Inko Jakub Kornakiewicz</p>
					<p>NIP: 734 360 30 90</p>
					<p>REGON: 520 510 299</p>
					<br />
					
					<p>Zajęcia odbywają się pod adresem:</p>

					<p><b>ul. Warszawska 3/60, 31-155 Kraków</b></p>
					
					
					<br />
					<br />

					<p><b>Wyślij wiadomość:</b></p>
					
				</article>	
				
								<?php

$to      = 'kontakt@ilonastudio.pl';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);

echo '<h2>Wiadomość wysłana :)</h2>';
?>

					<div class="contact">
								<form method="post" name="contactform" action="mail.php">
									<div class="field half first">
										
										<input type="text" name="name" id="name" placeholder="Imię..." onfocus="this.placeholder=''" onblur="this.placeholder='Imię...'" required/>
									</div>
									<div class="field half">
										
										<input type="email" name="email" id="email" placeholder="E-mail..." onfocus="this.placeholder=''" onblur="this.placeholder='E-mail...'" required/>
									</div>
									<div class="field">
										
										<textarea name="message" id="message" rows="4" placeholder="Wiadomość..." onfocus="this.placeholder=''" onblur="this.placeholder='Wiadomość...'" required></textarea>
									</div>
									<div class="actions">
										<input type="submit" name="submit" value="Wyślij" class="special" />
									</div>
								</form>
					</div>	
					<br />
					<p><b>Sprawdź lokalizację:</b></p>
					<br />
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.9678135846048!2d19.941174316050997!3d50.06816442271669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b1ad4913c55%3A0xb461c8b2b9ee194e!2sWarszawska%203%2C%2031-155%20Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1649011169898!5m2!1spl!2spl" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>					
			<br />	<br />
		</div>
	</section>
</main>


				
<footer>	
		
	<div id="foot">
		
		<div class="footer">+48 666 685 606</div>
		<div class="footer"><img src="img/graf.png" width="154" height="40"  alt="graf" ></div>
		<div class="footer">kontakt@ilonastudio.pl</div>
		
	</div>
</footer>
				
		
		
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>