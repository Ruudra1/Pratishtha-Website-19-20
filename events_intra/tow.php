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
                            <h1>Tug Of War</h1>
                            <p>a contest in which two teams pull at opposite ends of a rope until one drags the other over a central line.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><img src="games/tow.jpg" alt="" /></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header>
							<h2>Dates</h2>
						</header>
						<div class="content">
						<p><strong>1st February 2020</strong></p>
						</div>
					</section>

				<!-- Section -->
				<section>
						<header>
							<h2>Venue</h2>
						</header>
						<div class="content">
							<p><strong>Ground</strong></p>

						</div>
					</section>

				<!--Section-->
				<section>
					<header>
						<h2>Event Coordinators</h2>
					</header>
					<div class="content">
						<ul class="alt">
							<li><h2>Head:</h2><h3> Saurabh Parekh <br><br>+91 9833377939</h3></li>
							<li><h2>Co-Head:</h2><h3> Siddhesh Koli <br><br>+91 9869115411</h3></li>
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
	$q="select b.class,b.tug_of_war as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
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
		$q="select b.class,g.tug_of_war as t from olympus_points_b b,olympus_points_g g where b.class=g.class order by t DESC";
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
							<p><strong>Sample Rules</strong> nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>



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
