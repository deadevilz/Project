<html>
<head>
<title>Upload</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>

<?php
require('config.php');
$sql = "SELECT * FROM tumor_data";
$query = mysql_query($sql);
echo "<table border='1'><tr>";
		for($i=0; $i<mysql_num_fields($query);$i++)
		{
			$field = mysql_fetch_field($query);
			echo "<td>{$field->name}</td>";
		}
		while($row = mysql_fetch_assoc($query))
		{	 echo "<tr>";		
			 foreach($row as $cell)
					echo "<td>$cell</td>";
			echo "<td><input type='button' value='change' class='test' /></td>";
			 echo "</tr>\n";
		}
?>
<script type="text/javascript" src="../jQuery/jquery.js"></script>
<script type="text/javascript">
	$(".test").click(function (){
		$(this).parent().parent().children().each(function(){
			console.log($(this).text());
		});
		//for(var i=0;i<a.length;i++)
			
	});
</script>
</body>
</html>