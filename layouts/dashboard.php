<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($_GET['page']) ? ucfirst($_GET['page']) : ''; ?> - PLN Project</title>
	<link rel="icon" type="image/x-icon" href="<?= AST; ?>/img/eid-mubarak.png">
	<link rel="stylesheet" href="<?= AST; ?>/css/style.css">
	<link rel="stylesheet" href="<?= AST; ?>/css/table.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

	<aside class="main-sidebar">
		<div class="sidebar-header">
			<a href="index.html">
				<h3 class="logo-title">PLN Project</h3>
			</a>
		</div>
		<div class="sidebar-body">
			<div class="scroll-content">
				<div class="sidebar-list">
					<ul class="sidebar-nav">
						<li class="nav-item" id="static-item">
							<a class="nav-link" href="#">
								<span>Home</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= (str_contains($_GET['page'], 'dashboard')) ? 'id="active"' : ''; ?> href="<?= URL; ?>/dashboard">
								<i class="fa fa-dashboard"></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="nav-item" id="static-item">
							<a class="nav-link" href="#">
								<span>Master Data</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= (str_contains($_GET['page'], 'user')) ? 'id="active"' : ''; ?> href="<?= URL; ?>/user">
								<i class="fa fa-users"></i>
								<span>User</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= (str_contains($_GET['page'], 'golongan')) ? 'id="active"' : ''; ?> href="<?= URL; ?>/golongan">
								<i class="fa fa-layer-group"></i>
								<span>Golongan</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= (str_contains($_GET['page'], 'pelanggan')) ? 'id="active"' : ''; ?> href="<?= URL; ?>/pelanggan">
								<i class="fa fa-address-book"></i>
								<span>Pelanggan</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</aside>

	<div class="wrapper">
		<nav class="main-navbar">
			<div class="profile">
				<i class="fa fa-circle-user profile-icon"></i>
				<span class="profile-name"><?= $_SESSION['user']['nama']; ?></span>
			</div>
			<a href="<?= URL; ?>/dashboard/logout" class="btn btn-default">Logout</a>
		</nav>

		<header class="main-header">
			<div class="header-img">
				<h1>Hai! <?= $_SESSION['user']['nama']; ?></h1>
				<p>Aplikasi PLN sederhana.</p>
			</div>
		</header>

		<main class="main-content">
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</main>

		<footer class="main-footer">
			<span>&copy;2023 PLN Project, Made With <i class="fa fa-heart"></i></span>
			<a href="https://github.com/nafbeckh" target="_blank">Nafbeckh</a>
		</footer>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

</body>

</html>