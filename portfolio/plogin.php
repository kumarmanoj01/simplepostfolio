<!Doctype html>
<HTML>
	<head>
		<title>Portfolio Website</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=josefin+sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!-- CSS only -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	</head>
	<body>
		<!---hero Section Start ----->
		<div class="hero">
			<nav>
				<h2 class="logo">Portfo<span>lio</span></h2>
				<ul>
					<li><a href="plogin.php"><i class="fa-solid fa-house"></i> Home</a></li>
					<li><a href="pabout.php"><i class="fa-solid fa-user"></i> About</a></li>
					<li><a href="pservices.php"><i class="fa-solid fa-bars"></i> Services</a></li>
					<li><a href="pportfolio.php"><i class="fa-duotone fa-briefcase"></i> Portfolios</a></li>
					<li><a href="pcontact.php"><i class="fa-solid fa-comments"></i> Contact Us</a></li>
				</ul>
				<a href="#" class="btn">Subscribe</a>
			</nav>
			<div class="content">
				<h4>Hello my name is</h4>
				<h1>Manoj <span>Kumar</span></h1>
				<h3>I'am a web Devloper.</h3>
				<div class="newslatter">
					<form>
						<input type="email" name="email" id="mail" placeholder="Enter Your Email">
						<input type="submit" name="submit" value="Lets Start">
					</form>
				</div>
				
			</div>
		</div>
		<!--- Action Section Start ------>
		<div class="about">
		<section class="main">
			<img src="manoj11.jpg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Developer <span>& Designer</span></h5>
				<p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations. I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations.A responsive design makes your website accessible to all users, regardless of their device.</p>
				<button type="button" href="pabout.php">Let's Talk</button>
			</div>
		</section>
		<!----- Services sectionstart------->
		<div class="Services">
			<div class="title">
				<h2>Our Services</h2>
			</div>
			<div class="box">
				<div class="card">
					<i class="fa-solid fa-bars"></i>
					<h5>Web Devlopment</h5>
				<div class="pra">
					<p>We build a website for organizations, institutions, company.
							We are using Advance Web technology.
							</p>
					<p style="text-align: center;">
						<a class="button" href="pservices.php"> Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fa-regular fa-user"></i>
				<h5>Myself</h5>
				<div class="pra">
					<p><table >
						<tr>
							<th> Manoj Kumar </th>
						</tr>
						<tr>
							<th> Student at Amity University </th>
						</tr>
						
						<tr>
							<th>DOB 02-08-1998 </th>
						</tr>
						<tr>
							<th>Loaction: Patna </th>
						</tr>
					</table></p>
					<p style="text-align: center;">
						<a class="button" href="pabout.php"> Read More</a>
					</p>
				</div>
			</div>

			<div class="card">
				<i class="fa-regular fa-diagram-project"></i>
				<h5>Our Project</h5>
				<div class="pra">
					<p> We are working on ......</p>
					<p style="text-align: center;">
						<a class="button" href="#"> Read More</a>
					</p>
				</div>
			</div>
			</div>
		</div>
		<div class="content-me">
			<p>Let Me You A Beautiful Website.</p>
			<a class="button-two" href="#">Hire Me </a>
		</div>

		<!----footer Start ------->
		<footer>
			<p>Manoj Kumar</p>
			<p> For more information - please click on the link below to Subscribe to my channel: </p>
			<div class="social">
				<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i> </a>
				<a href="https://www.instagram.com/?hl=en"><i class="fa-brands fa-instagram-square"></i> </a>	
				<a href="#"><i class="fa-brands fa-linkedin"></i></a>	
				<a href="#"><i class="fa-brands fa-blogger-b"></i></a>
			</div>	
			<p class="end">CopyRight By Manoj Kumar</p>
		</footer>
	</body>
</HTML>