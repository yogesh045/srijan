<?php 

$post = $_POST;
$submit_data = [];
$matched_data = array();
$obj = new FindClass;
foreach($post as $key => $value) {
 $key_arr = explode("_", $key);
 if (isset($key_arr[1])) {
    $submit_data[$key_arr[1]][$key_arr[0]] = $value;
  }
}
foreach($submit_data as $data) {
	foreach($data as $key => $val) {
    	 if($key == 'sentence')
		   $string = $val;
		 if($key == 'words')
		   $word = $val;
		 if($key == 'option')  
		   $option = $val;
		 if($key == 'num')
		   $index = $val;
	}
	$word = ($option == "yes") ? $word . " " : $word;		
	$matched_data[] = $obj->findString($string, $word, $index);
}
	
class FindClass {
	function findString($string, $word, $index) {
		$pos = strpos($string, $word, $index);
		if(!$pos) {
			return "No Worries";
		}
		else{
			return $pos;
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Hack Number</title>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="/Srijan/dictionary/styles.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/Srijan/dictionary/myscript.js"></script>
</head>
<body>
	<P><h4>Hack Number</h4></P>	
	<span class="col-sm-12">Result</span>
	<?php foreach($matched_data as $result) { ?>
		<div class="col-sm-12"><?php echo $result; ?></div>
		 <?php } ?>
</body>
</html>
