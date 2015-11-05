<?php
	$lineHeight 	= 200;
	$numCols    	= 20;
	$numRows    	= 20;
	$rowType		='odd';
	$triangleType	='left';
	$lineOffset		=$lineHeight/2;
	$colOffset		=0;
	$triangleWidth	=$lineHeight * sin(M_PI/3);

	$colors = array('#57385c','#a75265','#ec7263','#fbeb7e','#ffedbc');


	echo('
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dreiecke</title>
  </head>
  <body>
  	<svg width="2000" height="2000">');


	for($row=0; $row<$numRows; $row++) {
		for($col=0; $col<$numCols; $col++) {
			$rand = rand(0,count($colors)-1);

			if($triangleType=='left') {
				// Dreieck zeichnen
				$p1x=abs(floor($colOffset));
				$p1y=abs(floor($lineOffset)); // linke Ecke
				$p2x=abs(floor($colOffset + $triangleWidth));
				$p2y=abs(floor($lineOffset-$lineHeight/2)); // obere Ecke
				$p3x=abs(floor($colOffset + $triangleWidth));
				$p3y=abs(floor($lineOffset+$lineHeight/2)); // untere Ecke
				echo('
					<polygon points="'.$p1x.','.$p1y.' '.$p2x.','.$p2y.' '.$p3x.','.$p3y.'" id="tria'.$row.'-'.$col.'-'.$triangleType.'" style="fill:'.$colors[$rand].';" />');


				$colOffset = $colOffset + (2 * $triangleWidth);
				$triangleType = 'right';

			} else {
				// Dreieck zeichnen
				$p1x=abs(floor($colOffset));
				$p1y=abs(floor($lineOffset)); // linke Ecke
				$p2x=abs(floor($colOffset - $triangleWidth));
				$p2y=abs(floor($lineOffset-$lineHeight/2)); // obere Ecke
				$p3x=abs(floor($colOffset - $triangleWidth));
				$p3y=abs(floor($lineOffset+$lineHeight/2)); // untere Ecke
				echo('
					<polygon points="'.$p1x.','.$p1y.' '.$p2x.','.$p2y.' '.$p3x.','.$p3y.'" id="tria'.$row.'-'.$col.'-'.$triangleType.'" style="fill:'.$colors[$rand].';" />');

				$triangleType = 'left';

			}
		}
		// Wechsel im Zeilentyp
		if ($rowType=='odd') {
			$rowType='even';
			$triangleType='right';
			$colOffset=$triangleWidth;

		} else {
			$rowType='odd';
			$triangleType='left';
			$colOffset=0;
		}

		$lineOffset = $lineOffset + $lineHeight/2;
	}

	echo('</svg>
		</body>
	</html>');

?>