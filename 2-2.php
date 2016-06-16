<!DOCTYPE html>
<?php
		require('config.php');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-2</title>
	 <script type="text/javascript">
		var xhr;
		function run_ajax()
		{
			xhr=new XMLHttpRequest();
			if(xhr.overrideMimeType)
			{
				xhr.overrideMimeType("text/xml");
			}
			xhr.onreadystatechange=getData;
			xhr.open("post","2-2.php",true);
			xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=UTF-8");//照打囉
			value1=document.getElementById('lo').value;//藉由欄位id去取值
			
			xhr.send(value1);//送出

		}
		function getData()
		{
			if(xhr.readyState==4)
			{
				if(xhr.status==200)
				{
					document.getElementById("show").innerHTML=xhr.responseText;//將responseText輸出
				}
			}
		}
	</script>

</head>
<body>
	<!-- <form action="" method="post"> -->
		<select name="YourLocation" id="lo" onClick="run_ajax()";>
　			<option value="1">台北市</option>
			<option value="2">台南市</option>
　			<option value="3">高雄市</option>
		</select>
		<span id="show">
		<select name="area" id="show" >
		<?php
			$read="SELECT area_name FROM area,city WHERE
			 city.no=area.city_no and city.no =value1";
			$result=mysqli_query($conni,$read);
				
			while($row=mysqli_fetch_array($result))
			{
				$area=$row[0];
				echo "<option value=$area>$area</option>";
				
			}
		?>
		</select>
		</span>
	<!-- </form> -->
	<!--3-3題-->縣市+區域<input type="text" id="address"></br>
	<input type="button" value="下載">
	<?php
			$filename = "area.csv";
			header("Content-type: text/x-csv");
			header("Content-Disposition: attachment;filename=$filename");
			header("Expires: 0");
			header("Pragma: public");
			$read="SELECT area_name FROM area,city WHERE
			 city.no=area.city_no and city.no =1";
			$result=mysqli_query($conni,$read);
			while($row=mysqli_fetch_array($result))
			{
				$area=$row[0];
				$content .=$area.",\n";	
			}
		echo mb_convert_encoding($content , "Big5" , "UTF-8");
?>
</body>
</html>


