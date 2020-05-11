<?php

if (!$data = file_get_contents('https://covidnigeria.herokuapp.com/api')) {
	header('Location: 404.html');
}else{
$data = file_get_contents('https://covidnigeria.herokuapp.com/api');

		$data = json_decode($data, true);

		// Nigeria Total Cases Variables... 
		$NigeriaTotalSamplesTested = $data['data']['totalSamplesTested'];
		$NigeriaTotalConfirmedCases = $data['data']['totalConfirmedCases'];
		$NigeriaTotalActiveCases = $data['data']['totalActiveCases'];
		$NigeriaDischarged = $data['data']['discharged'];
		$NigeriaDeath = $data['data']['death'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Nigeria ...</h2>
	<u>Total Sample tested: </u><b><?php echo $NigeriaTotalSamplesTested; ?></b>
	<?php
	// this loop will echo all the states cases in Nideria
        $sn 	= 0;
		$states = $data['data']['states'];                         
                
		foreach ($states as $key) {
			$sn++;
			$statesName				=	$key['state'];
			$statesConfirmedCases 	=	$key['confirmedCases'];
			$statesOnAdmission 		=	$key['casesOnAdmission'];
			$statesDischarged 		=	$key['discharged'];
			$statesDeath 			=	$key['death'];
			?>
			<p>
			<b><?php echo $sn.' -- '; ?></b>
			<?php echo '<b>State : </b>' . $statesName; ?>
			<?php echo '<b>Cases Confirmed: </b>' . $statesConfirmedCases; ?>
			<?php echo '<b>Cases On Admission: </b>' . $statesOnAdmission; ?>
			<?php echo '<b>Cases discharged: </b>' . $statesDischarged; ?>
			<?php echo '<b>Death: </b>' . $statesDeath; ?>
			</p><br>
	<?php
		}
	}
		?>

</body>
</html>
