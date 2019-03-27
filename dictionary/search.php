<?php

$post = $_POST;
$dict = array();
$query_string = array();

foreach($post as $key => $value) {
	if("words_" == substr($key,0,6)){
      $dict[] = $value;    
	}
	elseif("query_" == substr($key, 0, 6)) {
	  $query_string[] = $value;
	}
}
class Matchcounting {
	public function count_string($dict, $val) {
		$count = 0;
		$match_array = array();
		$match_string = str_replace("?", "", $val);
		foreach($dict as $key => $val) {
			if(strpos($val, $match_string)!== false) {
				$match_array[] = $val;
			}
		}
		$count = count($match_array);
		return $count;
	}
}

$count = new Matchcounting;
$data = array();
foreach($query_string as $val) {
	$data[] = $count->count_string($dict, $val);
}
?>

<html>
	<head>
		<title>Advance Search</title>
		<meta charset="UTF-8">  
		<link rel="stylesheet" href="styles.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="myscript.js"></script>
	</head>
<body>
	<P><h4>Dictionary Data</h4></P>

<div class="table">
	<span class="col-sm-6">Queries</span>
	<span class="col-sm-6">Count</span>  
</div>
<div class="col-sm-12">
<div class= "queries col-sm-6">
  <?php foreach($query_string as $query) { ?>
	<p><?php echo $query; ?> </p>
  <?php } ?>
  </div>
  <div class= "counts col-sm-6">
	 
  <?php foreach($data as $value) { ?>
    <p><?php echo $value; ?></p>
  <?php } ?>
</div>
</div>


</body>
</html>
