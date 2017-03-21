<?php
$inputs = $_POST['inputs'];
$mn = $_POST['mn'];
$path_to_check='';
if ($mn != 'm') {
	$path_to_check = glob('view/'.$mn.'/' . '*.php');
}else {
	$path_to_check = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('view/'));

}


 $DOM = new DOMDocument('1.0', 'UTF-8');
$str ='';
foreach($path_to_check  as $filename)
{	
	$pos = strpos($filename, '.php');
	if ($pos){
  foreach(file($filename) as $fli=>$fl)
  {
  	
	libxml_use_internal_errors(true);
	$DOM->loadHTML($fl);
	libxml_clear_errors();
	$items = $DOM->getElementsByTagName('f'); 
	$loc='';
	for ($i = 0; $i < $items->length; $i++){
		$loc = $items->item($i)->nodeValue; 
		
	}

    if(strpos(strtolower($loc), strtolower($inputs))!= false)
    {
    	$str .=  $fl;
    	libxml_use_internal_errors(true);
		$DOM->loadHTML($fl);
		libxml_clear_errors();
		$items = $DOM->getElementsByTagName('f');

		for ($i = 0; $i < $items->length; $i++){
			$loc = $items->item($i)->nodeValue; 
			$loc1 = basename($filename, ".php");
				if ($loc) {
					echo '<div class="well SCL" id="'.$loc1.'">'.$loc. "</div>";
				}
		   
		}

    }
  }
  }
}

?>