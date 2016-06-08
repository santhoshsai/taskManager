<?php
	$data['taskName'] = 'Learn MEAN';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-06-30';
	$diff = date_diff(date_create($data['StartDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff->format('%d days');
	$data['taskDescription'] = 'MEAN for Next Company';
	$jsonData[0] = $data;

	$data['taskName'] = 'Room Expense Manager';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-06-15';
	$diff = date_diff(date_create($data['StartDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff->format('%d days');	$data['taskDescription'] = 'Prepare Room budget manager web app';
	$jsonData[1] = $data;

	$data['taskName'] = 'My Task Manager';
	$data['StartDate'] = '2016-06-01';
	$data['endDate'] = '2016-06-15';
	$diff = date_diff(date_create($data['StartDate']),date_create($data['endDate']));
	$data['dateDiff'] =$diff->format('%d days');
	$data['taskDescription'] = 'Do task manager with proper DB and UI design';
	$jsonData[2] = $data;
	$jsonDaata =json_encode($jsonData);
	echo $jsonDaata;
	//echo "datas is working...!!!";
?>
