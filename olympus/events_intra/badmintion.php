<!DOCTYPE HTML>

<html>
	<head>
		<title>Pratistha</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="icon" type="image/png" href="favicon_oly.ico"/>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71546305-5"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-71546305-5');
		</script>

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
                            <h1>Badmintion</h1>
                            <p>Badminton is a racquet sport played using racquets to hit a shuttlecock across a net. Although it may be played with larger teams, the most common forms of the game are "singles" (with one player per side) and "doubles" (with two players per side).</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/bad.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>Dates</h2>
						</header>
						<div class="content">
						<p><strong>30 th January 2020</strong></p>
						</div>
					</section>

				<!-- Section -->
				<section>
						<header>
							<h2>Venue</h2>
						</header>
						<div class="content">
							<p><strong>Sakec Stalls</strong></p>

						</div>
					</section>

				<!--Section-->
				<section>
					<header>
						<h2>Event Coordinators</h2>
					</header>
					<div class="content">
						<ul class="alt">
							<li><h2>Head:</h2><h3> Nimeesh Bagwe <br><br>+91 9869187670</h3></li>
							<li><h2>Co-Head:</h2><h3> Ajay Choudhari <br><br>+91 9987131705</h3></li>
							<li><h2>Co-Head:</h2><h3> Prishita Sinha <br><br>+91 9769659241</h3></li>

						</ul>
					</div>
				</section>





					<!-- Section -->
					<section>
							<header>
								<h2>Points Table Boys</h2>
							</header>
							<div class="content">

								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th><strong>Team</strong></th>

												<th><strong>Points</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php
												include '../admin/includes/connect.php';
$q="select b.class,b.badminton as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
$r=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($r))
{
												 ?>
												<td><?php echo $row['class']; ?></td>
												<td><?php echo $row['t'] ?></td>
											</tr>
<?php } ?>

										</tbody>

									</table>
								</div>


							</div>
						</section>
						<section>
								<header>
									<h2>Points Table Girls</h2>
								</header>
								<div class="content">

									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th><strong>Team</strong></th>

													<th><strong>Points</strong></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<?php
													include '../admin/includes/connect.php';
	$q="select b.class,g.badminton as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
	$r=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($r))
	{
													 ?>
													<td><?php echo $row['class']; ?></td>
													<td><?php echo $row['t'] ?></td>
												</tr>
	<?php } ?>

											</tbody>

										</table>
									</div>


								</div>
							</section>




				<!-- Section -->
				<section>
						<header>
							<h2>Rules</h2>
						</header>
						<div class="content">
							<p><strong>1) If a team doesnt report within 15 mins from given time the opposite team will be given a walkover. </br></br>
2) Minimum 3 and Maximum 5 players. </br></br>
3) The match sequence will be singles doubles singles. </br></br>
4) First team to score 15 points will win the set. </br></br>
5) If any team loses then it will be knocked out. </br></br>
6) If any team wins first two matches then it will advance to the next round. </br></br>
7) If team set score is 1-1 then the third singles will be played. </br></br>	
8) Referee's decision will be final. 9)Finals will be of 3 sets 15 point each.
</strong></p>



						</div>
					</section>






		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
