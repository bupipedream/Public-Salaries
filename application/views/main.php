<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Faculty Salaries at Binghamton University</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

		<link href="css/main.css" rel="stylesheet" media="screen">
		
		<meta name="description" content="Search through salaries of professors and faculty at Binghamton University.">
		
		<!-- Open Graph -->
		<meta property="og:image" content="http://static2.bupipedream.com/wp-content/themes/bupipedream/img/og-image.png">
		<meta property="og:title" content="Pipe Dream Public Salaries">
		<meta property="og:site_name" content="Pipe Dream">
		<meta property="og:type" content="Website">
		<meta property="og:description" content="Search through salaries of professors and faculty at Binghamton University.">
	</head>
	<body>
		<div class="container">
			<header>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span10">
							<h1><a href="">Faculty Salaries <small>Binghamton University</small> </a></h1>
						</div>
						<div class="span2">
							<form class="input-append pull-right navbar-search">
								<input id="appendedInputButton" type="text">
								<button class="btn" type="button">Search</button>
							</form>
						</div>
					</div>
				</div>
			</header>
			<section>
				<table class="table table-striped">
					<tr>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Title</th>
						<th>Salary</th>
					</tr>
					<?php foreach($salaries as $row): ?>
						<tr id="row-<?= $row->id ?>">
							<td><?= $row->last_name ?></td>
							<td><?= $row->first_name ?></td>
							<td><?= $row->title ?></td> 
							<td><?= $row->salary ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</section>
			<footer>
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span9">
							<div class="pagination pagination-left">
								<ul>
									<li><a href="#">Prev</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
						<div class="span3">
							<div class="num-results">Showing results 1-20 of XYZ</div> 
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>
