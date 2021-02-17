
<?php
//Advanced filter.
	$intnum=300;
	$min=1;
	$max=200;
	if(filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, 
	"max_range"=>$max))) === false){
		echo "It is valide range";

	}
	else
	{
		echo "It is not Valide range";
	}

?>
<?php
	$intnum=300;
	$min=1;
	$max=200;
	if(filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, 
	"max_range"=>$max)))){
		echo "It is valide range";

	}
	else
	{
		echo "It is not Valide range";
	}


?>
<?php
//It is valide filter
	$intnum=100;
	$min=1;
	$max=200;
	if(filter_var($intnum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, 
	"max_range"=>$max)))){
		echo "It is valide range";

	}
	else
	{
		echo "It is not Valide range";
	}

?>

<?php
//this query is not valide.


$url="http://www.trainingwithliveproject.com";
	if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
		echo "this url is valide";
	}
	else
	{
		echo "it is not valide";
	}
?>

<?php
//this query is valide.

$url="http://www.trainingwithliveproject.com/index.html?q=123";
	if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
		echo "this url is valide";
	}
	else
	{
		echo "it is not valide";
	}



?>
