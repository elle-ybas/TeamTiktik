<?php

	session_start();
   
		if(isset($_SESSION['num_visit'])) {
    		$_SESSION['num_visit'] = $_SESSION['num_visit']+1;
    		if ($_SESSION['num_visit'] >= 10) {
    			header('Location: congratulations.php');
    			exit;
    		}
		} else {
    		$_SESSION['num_visit']=1;
    	}

    $num_visit = $_SESSION['num_visit'];

?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visit ?> times</p>
<p><a href="?reset=true" type="reset">Reset</a></p>
