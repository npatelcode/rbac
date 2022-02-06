<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
	<meta name="viewport" content="width=device-width, initial-scale=1">	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<?php $title=$title ?? SITE_TITLE; ?>	
	<title><?php echo $title; ?></title>
	<?php       
		if (isset($cssFiles)) {
            foreach ($cssFiles as $css) {
				$csspath="/views/{$css}";
                echo "<link href=\"{$css}\" rel=\"stylesheet\">";
            }
        }
    ?>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<link rel="stylesheet" href="/js/tableui/tui-grid.css" />
	<link rel="stylesheet" href="https://uicdn.toast.com/tui.pagination/latest/tui-pagination.css" />
	<link href="/css/dashboard.css" rel="stylesheet" >

</head>
	<body>
		<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php SITE_TITLE?></a>
			<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
			<div class="navbar-nav">
				<div class="nav-item text-nowrap">
				<a class="nav-link px-3" href="#">Sign out</a>
				</div>
			</div>
		</header>
		<div class="container-fluid">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">
								<span data-feather="home"></span>
								Dashboard
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<span data-feather="file"></span>
								Groups
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/user">
								<span data-feather="file"></span>
								Users
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/role">
								<span data-feather="file"></span>
								Roles
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<span data-feather="shopping-cart"></span>
								DID
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<span data-feather="users"></span>
								Routes
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<span data-feather="bar-chart-2"></span>
								Billing
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
								<span data-feather="layers"></span>
								Plans
								</a>
							</li>
							</ul>
					</div>
				</nav>

				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">	
					<?php echo $content; ?>
				</main>
			</div>
		</div>
		<footer>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
		    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
			<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" > </script> -->

	  		<!-- <script src="/js/dashboard.js"></script> -->
			  <script src="/js/tableui/tui-grid.js"></script>
			  <script type="text/javascript" src="https://uicdn.toast.com/tui.pagination/v3.4.0/tui-pagination.js"></script>
			<?php 
				if (isset($jsFiles)) {
					foreach ($jsFiles as $js) {
						$jspath="/views/{$js}";
						echo "<script type='text/javascript' src=\"{$jspath}\"></script>";
					}
				}
				?>				
		</footer>
	</body>
</html>