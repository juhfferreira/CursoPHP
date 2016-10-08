
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="static/navbar.css">		
			<?php 
			require "static/bootstrap.php";
			?>

	</head>
	<body>
			<!-- ==========================================NAVBAR========================================== -->
		<nav class="navbar navbar-custom navbar-fixed-top">
		   <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php"><b>whOO</b></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		       <li><a href="cadastro.php">Cadastrar</a></li>
		       
		       <li><a href="<?= $URL_PATH ?>CORE/logout.php">Logout</a></li>
 		   
		      
		       	 </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<br />
		<br />
		<br />
		
	</body>
	</html>