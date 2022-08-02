<?php include 'db_connect.php' ?>
<?php include 'nav.php' ?>

<style>
  /*  Start About section */
#about .about{
	flex-direction: column-reverse;
	text-align: center;
	justify-content: center;
	max-width: 1200px;
	margin: 100px auto;
	padding: 100px 20px;
}
#about .col-left{
	width: 250px;
	height: 360px;
}
#about .col-right{
	width: 100%;
}
#about .col-right h2{
	font-size: 1.8rem;
	font-weight: 500;
	letter-spacing: .2rem;
	margin-bottom: 10px;
}
#about .col-right p{
	margin-bottom: 20px;
	color: #000;
}
#about .col-right .cta{
	color: #000;
	margin-bottom: 50px;
	padding: 10px 20px;
	font-size: 2rem;
}
#about .col-left .about-img{
	height: 100%;
	width: 100%;
	position: relative;
	border: 10px solid #fff;
}
#about .col-left .about-img::after{
	content: '';
	position: absolute;
	left: -33px;
	top: 19px;
	height: 98%;
	width: 98%;
	border: 7px solid crimson;
	z-index: -1;
}
/* End  About section */
</style>

<!-- About Us Section Start -->
<section id="about">
		<div class="about container">
			<div class="col-left">
				<div class="about-img">
					<img src="assets/img/img-2.png">
				</div>
			</div>
			<div class="col-right">
				<h1 class="section-title">ABOUT<span>Me</span></h1>
				<h2>Lorem ipsum dolor sit amet,</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, culpa maiores quisquam labore! Cum delectus quos qui nam neque praesentium quas amet eum, culpa, impedit omnis dolores laborum reiciendis sapiente.</p>
				<a href="contact.php" class="cta">Contact Me</a>
			</div>
		</div>
	</section>
	<!--  About Us Section End -->
<?php include 'footer.php' ?>
