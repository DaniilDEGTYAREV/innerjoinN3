<meta charset="utf-8">
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($connect, "SELECT * FROM schedule INNER JOIN students ON students.schedule_id = schedule.id");
	for($i = 0; $i < $query->num_rows; $i++){
		$result = $query->fetch_assoc();
		echo $result['name'];
		echo $result['students'];
	} 
?>