<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="style1.css">
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


	
	<title>Miam-Miam</title>

	<style type="text/css">
		

		@import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap');

		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
			list-style: none;
			text-decoration: none;
			scroll-behavior: smooth;
			scroll-padding-top: 3rem;
		}

		:root{
			--main-color: #ff9f0d;
			--text-color: #000000;
			--other-color: #212121;
			--second-color:#C0C0C0;
			--bg-color: #f5f5f5;

			--big-font: 4.5rem;
			--h2-font: 2.6rem;
			--p-font: 1.1rem;
		}

		body{
			background: var(--bg-color);
			color: var(--text-color);
		}

		header{
			position: fixed;
			width: 100%;
			top: 0;
			right: 0;
			z-index: 1000;
			display: flex;
			align-items: center;
			justify-content: space-between;
			background: transparent;
			padding: 30px 14%;
			transition: all .50s ease;
		}

		.logo{
			display: flex;
			align-items: center;
			color: white;
			font-size: 33px;
			font-weight: 700;
		}

		.logo i{
			vertical-align: middle;
			margin-right: 8px;
			color: var(--main-color);
		}

		.navlist{
			display: flex;
		}

		.navlist a{
			color: white;
			font-size: var(--p-font);
			font-weight: 600;
			margin: 0 30px;
			transition: all .50s ease;
		}

		.navlist a:hover{
			color: var(--main-color);
		}

		.navlist a.active{
			color: var(--main-color);
		}

		.nav-icons{
			display: flex;
			align-items: center;
			padding: 8px 15px;
			background: var(--main-color);
			border-radius: 3rem;
			box-shadow: #ff9f0d 0px 1px 25px;
		}

		.nav-icons i{
			vertical-align: middle;
			font-size: 25px;
			color: var(--bg-color);
			margin-right: 8px;
			margin-left: 5px;
			transition: all .50s ease;
		}

		#menu-icon{
			font-size: 32px;
			color: var(--bg-color);
			z-index: 10001;
			cursor: pointer;
			display: none;
		}

		.nav-icons i:hover{
			transform: scale(1.1);
			color: var(--text-color);
		}

		section{
			padding: 70px 14% 60px;
		}

		.home{
			position: relative;
			height: 100vh;
			width: 100%;
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			align-items: center;
			gap: 2rem;
		}

		.home-img img{
			width: 100%;
			height: auto;
			object-fit: cover;
			border-radius: 50%;
			animation: imgRotate 50s linear infinite;
		}

		@keyframes imgRotate{
			100%{
				transform: rotate(360deg);
			}
		}

		
		.home-text h1{
			font-size: var(--big-font);
			font-weight: 700;
			line-height: 1.3;
			margin-bottom: 3rem;
		}
		
		span{
			color: var(--main-color);
		}

		.btn{
			display: inline-block;
			padding: 15px 35px;
			background: var(--other-color);
			color: var(--main-color);
			font-size: var(--p-font);
			font-weight: 500;
			letter-spacing: 1px;
			border-radius: 3rem;
			transition: all .50s ease;
		}

		.btn i{
			vertical-align: middle;
			margin-left: 9px;
			font-size: 22px;
		}

		.btn:hover{
			background: var(--main-color);
			color: var(--bg-color);
			box-shadow: #ff9f0d 0px 1px 25px;
		}

		.btn2{
			display: inline-block;
			margin-left: 30px;
			font-size: var(--p-font);
			font-weight: 500;
			letter-spacing: 1px;
			border-bottom: 3px solid var(--main-color);
			color: var(--main-color);
			transition: all .50s ease;
		}

		.btn2:hover{
			transform: scale(1.1) translateX(12px);
		}

		header.sticky{
			padding: 12px 14%;
			background: var(--other-color);
			transition: all .50s ease;
		}

		.container{
			padding: 30px 14% 70px;
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, auto));
			gap: 2rem;
			text-align: center;
		}

		.container-box{
			padding: 43px 43px 43px 43px;
			background: white;
			border-radius: 3rem;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
		}

		.container-box img{
			width: 100%;
			max-width: 50px;
			height: auto;
		}

		.container-box h3{
			font-size: 21px;
			font-weight: bold;
			margin: 16px 0;
		}

		.container-box a{
			color: var(--second-color);
			font-size: var(--p-font);
			letter-spacing: 1px;
			transition: all .50s ease;
		}

		.container-box a:hover{
			color: var(--main-color);
		}

		.about{
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			align-items: center;
			gap: 4rem;
		}

		.about-img img{
			width: 100%;
			height: auto;
		}

		.about-text h2{
			font-size: var(--h2-font);
			line-height: 1.3;
			margin-bottom: 2rem;
		}

		.middle-text{
			text-align: center;
		}

		.middle-text h4{
			font-size: 20px;
			font-weight: 700;
			margin-bottom: 10px;
			color: black;
		}

		.middle-text h2{
			font-size: var(--h2-font);
			color: var(--main-color);
		}

		.ligne-avec-texte{
			position: relative;
			text-align: center;
			line-height: 1;
		}

		.ligne-avec-texte::before,
		.ligne-avec-texte::after{
			content: '';
			display: inline-block;
			border-top: 3px solid  #ff9f0d;
			width: 5%;
			margin: 1 10%;
			border-radius: 10px;
		}

		.ligne-avec-texte span{
			
			padding: 0 10px;
			position: relative;
			z-index: 1;
			font-family: "Lucida Handwriting", cursive;
			font-weight: 700;
		}

		.element::after{
			content: "\1F603";
			font-size: 20px;
		}

		.element span{
			color: black;
			font-family: 'Protest Riot', sans-serif;
			font-weight: 1000;
        }
		.shop-content{
			display: flex;
			gap: 2rem;
			align-items: center;
			margin-top: 4rem;
		}

		.row{
			position: relative;
			padding: 30px 45px 45px;
			padding-top: 25px;
			backgroung: var(--other-color);
			border-radius: 3rem;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
		}

		.row img{
			width: 100%;
			height: 100%;
			transition: transform .50s ease;
			cursor: pointer;
			object-fit: contain;
		}

		.row h3{
			color: black;
			font-size: 18px;
			margin-bottom: 5px;
			font-weight: 700;
		}

		.row p{
			color: var(--second-color);
			font-size: white;
			line-height: 30px;
			margin-bottom: 1.1rem;
		}

		.in-text{
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.in-text .price h6{
			font-size: 17px;
			color: var(--main-color);
			font-weight: 600;
		}

		.in-text .s-btnn a{
			display: inline-block;
			padding: 10px 10px;
			padding-left: 60px;
			background: var(--bg-color);
			color: var(--main-color);
			font-size: 14px;
			font-weight: 500;
			letter-spacing: ;
			border-radius: 4rem;
			transition: all .50s ease;
		}

		.in-text .s-btnn a:hover{
			background: var(--main-color);
			color: black;
			box-shadow: #ff9f0d 0px 1px 25px;
		}

		.top-icon{
			position: absolute;
			top: 30px;
			left: 35px;
		}

		.top-icon i{
			font-size: 22px;
			color: var(--main-color);
		}
		.top-icon .cart{
			margin-left: 11rem;
		}

		.row-btn{
			text-align: center;
			margin-top: 6rem;
		}

		.row img:hover{
			transform: scale(1.1);
		}

		.review-content{
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, auto));
			gap: 2rem;
			align-items: center;
			margin-top: 4rem;
		}

		.box{
			display: flex;
			padding: 35px;
			background: white;
			border-radius: 14% 86% 14% 86% / 85% 12% 88% 15% ;
			overflow: auto;
			scroll-snap-type: x mandatory;
		}

		.box p{
			color: var(--second-color);
			font-size: var(--p-font);
			line-height: 30px;
			margin-bottom: 1.5rem;
		}
		

	</style>




		
	
		
		

</head>
<body>

	<!-- header -->
	<header class="sticky">
		<a href="#" class="logo"><i class='bx bxs-home'></i>Miam-Miam</a>

		<ul class="navlist">
			<li><a href="#home" class="active">ACCUEIL</a></li>
			<li><a href="#menu">MENU</a></li>
			<li><a href="#blog">BLOG</a></li>
			<li><a href="#contact">CONTACT</a></li>
			<li><a href="#apropos">APROPOS</a></li>
		</ul>

		<div class="nav-icons">
			<a href="#"><i class='bx bx-search'></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>

	</header>

	<script>
		const header = document.querySelector("header");

        window.addEventListener("scroll", function (){
	        header.classList.toggle("sticky" window.scrollY > 80);
        });
	</script>

	<!---home--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Des saveurs,<span>Extra</span> <br>à portée de clic <br></h1>
			<a href="#" class="btn">Explorez le Menu<i class='bx bxs-right-arrow'></i></a>
			<a href="#" class="btn2">Commander</a>
		</div>

		<div class="home-img">
			<img src="image/hero.jpg">
		</div>

		
	</section>

	<!--container-->
	<section class="container">
		<div class="container-box">
			<img src="image/c1.jpg">
			<h3>11:00 am - 8:00 pm</h3>
			<a href="#">Heures de travail</a>
		</div>

		<div class="container-box">
			<img src="image/c2.jpg">
			<h3>Cotonou,Agla</h3>
			<a href="#">Rejoignez nous</a>
		</div>

		<div class="container-box">
			<img src="image/c3.jpg">
			<h3>+22965962740</h3>
			<a href="#">Contactez nous</a>
		</div>
	</section>

	<!--about us--->
	<section class="about" id="about">
		<div class="about-img">
			<img src="image/story.jpg">
		</div>

		<div class="about-text">
			<h2>Vivre bien commence <br> par la consommation de repas sein</h2>
			<p>Dans une ville animée, un petit restaurant dirigé par un des meilleures  est devenu un lieu incontournable malgré des défis économiques. Les murs ornés de photos racontent des histoires de clients heureux, créant une atmosphère familiale. <br> <br> Nos meilleur cuisiner ont transmis l'héritage au fil des années à la génération suivante, assurant la pérennité de ce lieu aimé. Ainsi, le restaurant continue son histoire, chaque plat témoignant d'une passion partagée et d'une famille dédiée.</p> <br>
			<a href="#" class="btn">Explorez notre Story<i class='bx bxs-right-arrow'></i></a>
		</div>
	</section>

	<!---our shop-->
	<section class="shop" id="shop">
		<div class="middle-text">
			<h4>Nos Produits</h4>
			<br>
			<div class="ligne-avec-texte">
				<span>Menu du jour</span>
			</div>
			<br>
			<div class="element">
				<span>Faite vos choix et Commander</span>
			</div>
		</div>

		<div class="shop-content">
			<div class="row">
				<img src="image/promo-2.jpg">
				<h3>Burger avec deux viandes</h3>
				<p>Régaler vous avec ce délicieux burger</p>
				<div class="in-text">
					<div class="price">
						<h6>$30</h6>
					</div>
					<div class="s-btnn">
						<a href="#">Commander</a>
					</div>
				</div>

				<div class="top-icon">
					<a href="#"><i class='bx bx-heart'></i></a>
					<a href="#" class="cart"><i class='bx bx-cart'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="image/promo-4.jpg">
				<h3>Burger avec deux viandes</h3>
				<p>Régaler vous avec ce délicieux burger</p>
				<div class="in-text">
					<div class="price">
						<h6>$30</h6>
					</div>
					<div class="s-btnn">
						<a href="#">Commander</a>
					</div>
				</div>

				<div class="top-icon">
					<a href="#"><i class='bx bx-heart'></i></a>
					<a href="#" class="cart"><i class='bx bx-cart'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="image/promo-1.jpg">
				<h3>Burger avec deux viandes</h3>
				<p>Régaler vous avec ce délicieux burger</p>
				<div class="in-text">
					<div class="price">
						<h6>$30</h6>
					</div>
					<div class="s-btnn">
						<a href="#">Commander</a>
					</div>
				</div>

				<div class="top-icon">
					<a href="#"><i class='bx bx-heart'></i></a>
					<a href="#" class="cart"><i class='bx bx-cart'></i></a>
				</div>
			</div>

			<div class="row">
				<img src="image/promo-5.jpg">
				<h3>Burger avec deux viandes</h3>
				<p>Régaler vous avec ce délicieux burger</p>
				<div class="in-text">
					<div class="price">
						<h6>$30</h6>
					</div>
					<div class="s-btnn">
						<a href="#">Commander</a>
					</div>
				</div>

				<div class="top-icon">
					<a href="#"><i class='bx bx-heart'></i></a>
					<a href="#" class="cart"><i class='bx bx-cart'></i></a>
				</div>
			</div>
		</div>

		<div class="row-btn">
			<a href="#" class="btn">Tout nos produits<i class='bx bxs-right-arrow'></i></a>
		</div>
	</section>

	<!---reviews--->
	<section class="review" id="review">
		<div class="middle-text">
			<h4>Notre Clientèle</h4>
			<h2>Avis de nos clients sur nos mets</h2>
		</div>

		<div class="review-content">
			<div class="box">
				<p>J'adore commander chez ce restaurant en ligne! La qualité de la nourriture est toujours excellente, la livraison est rapide, et le service client est exceptionnel.<br>Je recommande vivement leurs plats délicieux!</p>
				<div class="in-box">
					<div class="bx-icon">
						<i class='bx bxs-user'></i>
					</div>
					<div class="bxx-text">
						<h4>John</h4>
						<h5>Food Vlogger</h5>
						<div class="ratings">
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="box">
				<p>Ce restaurant en ligne est devenu mon endroit préféré pour commander à emporter.<br>Leur menu varié offre quelque chose pour tous les goûts, et la facilité de commande en ligne est un vrai plus.<br>Les saveurs sont authentiques, et je ne peux pas assez les recommander.</p>
				<div class="in-box">
					<div class="bx-icon">
						<i class='bx bxs-user'></i>
					</div>
					<div class="bxx-text">
						<h4>Sandra</h4>
						<h5>Food Vlogger</h5>
						<div class="ratings">
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="box">
				<p>J'ai récemment découvert ce restaurant en ligne, et je suis impressionnée par la fraîcheur des ingrédients et la créativité de leurs plats. La livraison a toujours été ponctuelle, ce qui rend l'expérience encore meilleure.<br>J'ai hâte de commander à nouveau !</p>
				<div class="in-box">
					<div class="bx-icon">
						<i class='bx bxs-user'></i>
					</div>
					<div class="bxx-text">
						<h4>Juliette</h4>
						<h5>Food Vlogger</h5>
						<div class="ratings">
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="box">
				<p>J'ai commandé chez ce restaurant en ligne pour un événement spécial, et ils ont dépassé toutes mes attentes.<br> La présentation des plats était élégante, la nourriture était délicieuse, et mes invités étaient ravis.<br>Je recommande ce service pour des occasions spéciales et des repas de tous les jours.</p>
				<div class="in-box">
					<div class="bx-icon">
						<i class='bx bxs-user'></i>
					</div>
					<div class="bxx-text">
						<h4>Frank</h4>
						<h5>Food Vlogger</h5>
						<div class="ratings">
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
							<a href="#"><i class='bx bx-star'></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<!----link to js---->
	<script type="text/javascript" src="script.js"></script>

</body>
</html>