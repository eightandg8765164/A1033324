<?php
	class PostOffice
	{
		public function mailFiler()
		{
			$file=fopen("string.txt","r");
			$data=fgets($file,1000);
			echo $data;
		}
		public function mailRegex()
		{
			$file=fopen("string.txt","r");
			$data=fgets($file,1000);
			$clean=preg_replace("/[^A-Za-z0-9]/","", $data);
			echo $clean;
		}
		public function splitroad()
		{
			$file=fopen("road.txt","r");

			while($data=fgets($file))
			{
				$x='區';
				$strsec = explode($x,$data);
				$strsec[1];
				$y='路';
				$strsec2 = explode($y,$strsec[1]);
				echo $strsec2[0];
				echo "路<br>";
			}
		}
	}

 	$office= new PostOffice;
 	echo  $office->mailFiler();
 	echo "<br>";
 	echo  $office->mailRegex();
 	echo "<br>";
 	echo  $office->splitroad();
	
?>