<?php
	require('data.php');
	// файл с массивом
?>

<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- <div class="container-fluid"> -->
		<div class="container">
			<div class="row news">
				<!-- цикл, создающий блоки с новостями -->
				<?php for ($i=0; $i < count($data_ready); $i++): ?>
						<div class='col-sm-12 col-md-6 col-lg-4 col-xl-3 news-block'>
							<div class='d-flex flex-column justify-content-start news-block-inner'>
								<div class='news-block-inner-pic text-center'>
									<img src="<?php echo $data_ready[$i]['image']; ?>">
								</div>
								<div class='news-block-inner-title'><?php echo $data_ready[$i]['title'];?></div>
								<div class='news-block-inner-teaser'><?php echo $data_ready[$i]['preview'];?></div>
							</div>
						</div>
                		<?php endfor;?>
				<!-- </div> -->
			</div>
		</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
