<?php
/**
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
**/

$data = file_get_contents('https://api.thevirustracker.com/free-api?countryTotal=NG');
$data = str_replace("[", "", $data);
$data = str_replace("]", "", $data);
$arr = json_decode($data, true);
//$arr = json_decode($data);
$CountryName = $arr['countrydata']['info']['title'];
$CountryCode = $arr['countrydata']['info']['code'];

$CountryToatalCases = $arr['countrydata']['total_cases'];
$CountryToatalRecovered = $arr['countrydata']['total_recovered'];
$CountryToatalDeath = $arr['countrydata']['total_deaths'];
$CountryNewCasesToday = $arr['countrydata']['total_new_cases_today'];
$CountryNewDeathsToday = $arr['countrydata']['total_new_deaths_today'];
$CountryActiveCases = $arr['countrydata']['total_active_cases'];

$data2 = file_get_contents('https://thevirustracker.com/free-api?global=stats');

		$data2 = str_replace("[", "", $data2);
		$data2 = str_replace("]", "", $data2);
$arr2 = json_decode($data2, true);

$GlobalToatalCases = $arr2['results']['total_cases'];
$GlobalSource = $arr2['results']['source']['url'];
$GlobalToatalRecovered = $arr2['results']['total_recovered'];
$GlobalToatalDeaths = $arr2['results']['total_deaths'];
$GlobalNewCasesToday = $arr2['results']['total_new_cases_today'];
$GlobalDeathToday = $arr2['results']['total_new_deaths_today'];
$GlobalActiveCases = $arr2['results']['total_active_cases'];

echo "<br>".$GlobalSource."<br>$s

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="inc/style.css">
	<link rel="stylesheet" type="text/css" href="inc/css/bootstrap.min.css">
	<title></title>
	<style type="text/css">
		#all{
			height: 100%;
			width: 100%;
			background-color: red; 
		}

		#triangle_to_right{
			/**float: righ **/t;
			width: 0;
			height: 0;
			border-top: 100px solid darkgreen;
			border-left: 100px solid transparent; 
		}

		#triangle_to_left{
			/**float: left **/
			width: 0;
			height: 0;
			border-top: 100px solid darkgreen;
			border-right: 100px solid transparent; 
		}

		#tab1{
			position: relative;
			width: 200;
			height: 150px;
			margin: 20px 0;
			background-color: darkgreen;
			border-radius: 50% / 10% ;
			text-align: center;
			text-indent: 3em;
		}
		#tab1:before{
			content: '';
			position: absolute;
			top: 100%;
			bottom: 10%;
			right: -5%;
			left: -5%;
			background: inherit;
			border-radius: 5% / 50%;
		}
		
	</style>
</head>
<body>

<div  id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="inc/img/1.png" alt="Nigeria Covid-19 Tracking">
			<figcaption>
					Nigeria
					Total Cases : <b><?php echo $CountryToatalCases;?></b>,<br>
					Total Recovered : <b><?php echo $CountryToatalRecovered;?> </b><br>
					Total Deaths : <b><?php echo $CountryToatalDeath;?> </b><br>
					Total New Cases Today : <b><?php echo $CountryNewCasesToday;?> </b><br>		
					Total New Deaths Today : <b><?php echo $CountryNewDeathsToday;?> </b><br>	
					Total Active Cases : <b><?php echo $CountryActiveCases;?> </b>
			</figcaption>
		</figure>
	</figure>
</div>
<!-- Colomn start 50% wide on mobile and bump up to 33.3% wide on desktop-->
<div class="container">
	<h3>Global Data</h3>
	<div class="row">
		<div class="col-4 col-md-4">Total Cases<br><b> <?php echo $GlobalToatalCases; ?></b></div>
		<div class="col-4 col-md-4">Total Recovered<br><?php echo $GlobalToatalRecovered; ?><b> </b></div>
		<div class="col-4 col-md-4">Total Deaths<br><b> <?php echo $GlobalToatalDeaths; ?></b></div>
	</div>
	<div class="row">
		<div class="col-4 col-md-4">New Cases Today <br><b> <?php echo $GlobalNewCasesToday; ?></b></div>
		<div class="col-4 col-md-4">New Deaths Today <br><?php echo $GlobalDeathToday; ?><b> </b></div>
		<div class="col-4 col-md-4">Active Cases <br><b> <?php echo $GlobalActiveCases; ?></b></div>
	</div>
</div>

	<!--div id="all">
		<div id="triangle_to_right"></div>
		<div id="triangle_to_left"></div>
		<div id="tab1"></div>
		<div id="tab1">Kano</div>
	</div-->

<footer>
	<h5>Data generted from </h5>
</footer>
</body>
</html>
