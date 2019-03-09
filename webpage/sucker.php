<link rel="stylesheet" type="text/css" href="buyagrade.css">
<h1><br>Thanks Sucker!</h1>
<?php 
if (empty($_GET["name"]) || empty($_GET["section"]) || empty($_GET["name1"]) || empty($_GET["name2"])) {
	echo "Please fill all required fields";
	echo "<a href='buyagrade.html'>Try again </a>";
	# code...
}else{
	if(isset($_GET["name"]) && isset($_GET["section"]) && isset($_GET["name1"]) && isset($_GET["name2"]))
	{
		$name=$_GET["name"];
		$section=$_GET["section"];
		$name1=$_GET["name1"];
		$name2=$_GET["name2"];
		 if (is_numeric($name)|| is_string($name2)) {
		 	echo "Invalid inputs! <br>";
		 		echo "<a href='buyagrade.html'>Try again </a>";
		 	# code...
		 } else
		 {
		 	$contents=$name.";" .$section.";" .$name1.";" .$name2."<br>";
		 	file_put_contents("suckers.txt", $contents, FILE_APPEND);
		 	echo "Your information has been recorded: <br>";
		 	echo "<table>";
		 	echo "<br><tr><td>Name</td></tr>";
		 	echo "<td></td><td>".$name."</td></tr>";
		 	echo "<tr><td>Section</td></tr>";
		 	echo "<td></td><td>".$section."</td></tr>";
		 	echo "<tr><td>Credit card</td></tr>";
		 	echo "<td></td><td>".$name1."(". $name2.")</td></tr>";
echo "</table>";
echo "<br><hr><br>Here are all suckers who have submitted:<br><br>";
echo "<pre>";
$file=file_get_contents("suckers.txt");
echo $files;
echo "</pre>";


		 }

	}
}


 ?>