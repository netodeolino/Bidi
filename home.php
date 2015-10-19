<!DOCTYPE html>
<html>
<head>
	<meta chasrset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Bidi</title>
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/jcarousel.basic.css">

	<script type="text/javascript" src="js/modernizr-custom.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<!--<script type="text/javascript" src="js/jcarousel.js"></script>-->
	<script type="text/javascript" src="js/jcarousel.basic.js"></script>
	
	</script>
</head>

<body>
	<?php include("header.php"); ?>
	
	<div class="container">
<div class="wrapper">
            <h1>Basic carousel</h1>

            <p>This example shows how to setup a basic carousel with prev/next controls and pagination.</p>

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><a href="http://globoesporte.com"><img src="img/one.jpg" width="600" height="400" alt=""></a></li>
                        <li><img src="img/two.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img/three.png" width="600" height="400" alt=""></li>
                    </ul>
                </div>

                <p class="photo-credits">
                    Photos by <a href="http://www.mw-fotografie.de">Neto Deolino</a>
                </p>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                <p class="jcarousel-pagination">
                    
                </p>
            </div>
        </div>
</div>
	<?php include("footer.php"); ?>

</body>
</html>
