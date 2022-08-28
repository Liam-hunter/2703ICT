<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {

    global $pms; 
	$result = [];

	// find all the matching pms
	foreach ($pms as $pm){
		if(!empty($name) && (stripos($pm['name'], $name) !== FALSE)){
			$result[] = $pm;
			// use continue to match each pm maximum of once
			continue;
		}
		if(!empty($year) && (strpos($pm['from'], $year) !== FALSE || strpos($pm['to'], $year) !== FALSE)){
			$result[] = $pm;
			continue;
		}
		if(!empty($state) && stripos($pm['state'], $state) !== FALSE){
			$result[] = $pm;
		}
	}
    return $result;
}
?>
