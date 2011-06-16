<?php
// Global includes
include('../include.php');

$query = "	SELECT
				color							
			FROM
				`time-t-able_subjects`
			WHERE
				user_ID = \"".$_SESSION['ID']."\"
			ORDER BY
				ID";
$tablecheck = $db->query($query);
if(!$tablecheck){
	die('Query Error:'.$db->error);
}
if($tablecheck->num_rows){
	$i = 0;
	while($row = $tablecheck->fetch_assoc()){
		$i++;
		if($row['color'])
			echo ".subject_".$i."\t{background-color:#".$row['color']."}\n";
	}
}
?>