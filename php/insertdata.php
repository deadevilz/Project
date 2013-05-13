<?php
	require('config.php');

	echo var_dump($_FILES);
	if(isset($_POST['slideno']))
	{
		
		$slideno = mysql_real_escape_string($_POST['slideno']);
		$diagnosis = mysql_real_escape_string($_POST['diagnosis']);
		$location = mysql_real_escape_string($_POST['location']);
		$date_biopsy = mysql_real_escape_string($_POST['date_biopsy']);
		$hn = mysql_real_escape_string($_POST['hn']);
		$name = mysql_real_escape_string($_POST['name']);
		$age = mysql_real_escape_string($_POST['age']);
		$sex = mysql_real_escape_string($_POST['sex']);
		$site = mysql_real_escape_string($_POST['site']);
		$region_of_lesion = mysql_real_escape_string($_POST['region_of_lesion']);
		$location = mysql_real_escape_string($_POST['location']);
		$catagory = mysql_real_escape_string($_POST['catagory']);
		$sub_catagory = mysql_real_escape_string($_POST['sub_catagory']);
		$status = mysql_real_escape_string($_POST['status']);

		checkSlidno($slideno);
		checkHN($hn);
		checkName($name);


		if($catagory=="other") $catagory = mysql_real_escape_string($_POST['catagory_other']);
		if($sub_catagory=="other") $sub_catagory = mysql_real_escape_string($_POST['sub_catagory_other']);
		
		$sql = "INSERT INTO `tumor_conference`.`tumor_data` (`slideno`, `date_biopsy`, `hn`, `name`, `age`, `site`, `region_of_lesion`, `location`, `dianosis`, `catagory`, `sub_catagory`, `status`)";
		$sql .="VALUES ('$slideno', '$date_biopsy', '$hn', '$name', '$age', '$site', '$region_of_lesion', '$location', '$diagnosis', '$catagory', '$sub_catagory', '$status');";
		$query = mysql_query($sql,$objConnect);
		if($query)
		{
			echo "<script>window.top.window.show_status('9');</script>";
		}
		else
		{
			echo "<script>window.top.window.show_status('10');</script>";
		}
	}
	function checkHN($hn)
	{
		if(trim($hn)==="")
		{	
			echo "<script>window.top.window.show_status('2');</script>";
			die('ช่อง HN ไม่ได้ใส่ค่า');
		}

	}
	function checkslidno($slideno)
	{
		if(trim($slideno)==="")
		{	
			echo "<script>window.top.window.show_status('1');</script>";
			die('ช่อง SLIDENO ไม่ได้ใส่ค่า');
		}
	}
	function checkName($name)
	{
		if(trim($name)==="")
		{	
			echo "<script>window.top.window.show_status('3');</script>";
			die('ช่อง NAME ไม่ได้ใส่ค่า');
		}
	}

?>