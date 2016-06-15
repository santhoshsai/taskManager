<?php
	$data['taskName'] = 'Learn MEAN';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-05-30';
	$data['currentDate'] = date("Y-m-d");
	$diff = date_diff(date_create($data['currentDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff->format('%R%a days');
	$data['dateDiffInt'] =(int)$diff->format('%R%a');
	$data['taskDescription'] = 'MEAN for Next Company';
	$jsonData[0] = $data;
	
	$data['taskName'] = 'Room Expense Manager';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-07-15';
	$data['currentDate'] = date("Y-m-d");
	$diff1 = date_diff(date_create($data['currentDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff1->format('%R%a days');	
	$data['dateDiffInt'] =(int)$diff1->format('%R%a');
	$data['taskDescription'] = 'Prepare Room budget manager web app';
	$jsonData[1] = $data;

	$data['taskName'] = 'My Task Manager';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-06-15';
	$data['currentDate'] = date("Y-m-d");
	$diff2 = date_diff(date_create($data['currentDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff2->format('%R%a days');
	$data['dateDiffInt'] =(int)$diff2->format('%R%a');
	$data['taskDescription'] = 'Do task manager with proper DB and UI design';
	$jsonData[2] = $data;
	$jsonDaata =json_encode($jsonData);
	echo $jsonDaata;
?>
