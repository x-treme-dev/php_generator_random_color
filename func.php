<?php 
 
		function getRandomColor($num){
	 	while($num > 0){
			$rand_color = 'rgb(0, 0, ' . mt_rand(0, 255) . ')';
			yield $rand_color;
			$num--;
		}
	}
	
	  foreach(getRandomColor(20) as $item){
		echo $item . '<br>';  
	  }
	  
	  echo '<br>';
	  echo implode(', ', iterator_to_array(getRandomColor(4)));
	    
	 
     function getDeg(){
		 $deg = mt_rand(0, 180) . 'deg';
		 echo $deg;
	 }	 
	
	
?>