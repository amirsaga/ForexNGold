<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Forex'N'Gold</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
		<script type="text/javascript" src="<?= base_url() ?>assets/js/highcharts/jquery-1.7.1.min.js"></script>
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/mapbox.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/newcss.css">
        <link rel="icon" type="image/ico" href="<?= base_url() ?>assets/img/images.jpg">
        
        
	</head>
	<body  >
		 
	<header id="header"  style="background-color:#696969">
		<div class="container">	
			
					
					<div class="mbar">
					<img id="" src="<?= base_url() ?>assets/img/ts4.jpg" alt="image not shown;header 123.jpg" />
					
											
							<ul class="mn" >
								<li  	id="mainnavbar"class="<?= ($this->uri->segment(1) === 'index') ? 'active' : '' ?>"><a href="<?= base_url() ?>index">Home</a></li>
								<li 	id="forex" class="<?= ($this->uri->segment(1) === 'forex') ? 'active' : '' ?>"><a href="<?= base_url() ?>forex">Forex</a></li>
								<li 	 id="gold" class="<?= ($this->uri->segment(1) === 'gold') ? 'active' : '' ?>"><a href="<?= base_url() ?>gold">Gold</a></li>
								<li    id="api" class="<?= ($this->uri->segment(1) === 'api') ? 'active' : '' ?>"><a href="<?= base_url() ?>api">API</a></li>
								<li    id="down" class="<?= ($this->uri->segment(1) === 'downloads') ? 'active' : '' ?>"><a href="<?= base_url() ?>downloads">Download</a></li>
								<li    id="cont" class="<?= ($this->uri->segment(1) === 'aboutus') ? 'active' : '' ?>"><a href="<?= base_url() ?>aboutus">About</a></li>
							</ul>
						
					
			</div>
		</header>
		</div>			
