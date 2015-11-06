<?php
  header('Content-type: image/svg+xml');

  $GLOBALS['kwcolor']['813']='100,100,100';
  $GLOBALS['kwcolor']['820']='240,240,240';
  $GLOBALS['kwcolor']['844']='140,190,178';
  $GLOBALS['kwcolor']['845']='222,215,175';
  $GLOBALS['kwcolor']['846']='165,200,143';
  $GLOBALS['kwcolor']['847']='239,132,123';


	function rgb2hex($r, $g, $b, $uppercase=false, $shorten=false) {
		// The output
		$out = "";
		 
		// If shorten should be attempted, determine if it is even possible
		if ($shorten && ($r + $g + $b) % 17 !== 0) $shorten = false;
		 
		// Red, green and blue as color
		foreach (array($r, $g, $b) as $c)
		{
		// The HEX equivalent
		$hex = base_convert($c, 10, 16);
		 
		// If it should be shortened, and if it is possible, then
		// only grab the first HEX character
		if ($shorten) $out .= $hex[0];
		 
		// Otherwise add the full HEX value (if the decimal color
		// is below 16 then we have to prepend a 0 to it)
		else $out .= ($c < 16) ? ("0".$hex) : $hex;
		}
		// Package and away we go!
		return $uppercase ? strtoupper($out) : $out;
	}

	function getRandomColor($kwid) {

		/*
		- gegeben sind 10 RGB-Farben (diese werden aus dem keyword-Parameter manuell zugewiesen)
		- innerhalb einer dieser farben soll eine leichte zufällige varianz für jedes der gezeichneten dreiecke ermittelt werden

		*/
		// $color = getKwColor($kwid);
		// $GLOBALS['kwcolor']['813']='60,60,60';

		$color = $GLOBALS['kwcolor'][$kwid];

		if (813 == $kwid || 820 == $kwid || ''==$kwid) {

		  $colorhelper[]='140,190,178';
		  $colorhelper[]='222,215,175';
		  $colorhelper[]='165,200,143';
		  $colorhelper[]='239,132,123';

			$zufall = mt_rand(0,3);
			$colorout='rgb('.$colorhelper[$zufall].')';

		} else {

			$rgb = explode(',',$color);

			$rgbdiff = mt_rand(0,20);
			if (($rgb[0]+$rgbdiff) > 255) { $red = $rgb[0]-$rgbdiff; } else { $red = $rgb[0]+$rgbdiff; }

			$rgbdiff = mt_rand(0,20);
			if (($rgb[1]+$rgbdiff) > 255) { $green = $rgb[1]-$rgbdiff; } else { $green = $rgb[1]+$rgbdiff; }

			$rgbdiff = mt_rand(0,20);
			if (($rgb[2]+$rgbdiff) > 255) { $blue = $rgb[2]-$rgbdiff; } else { $blue = $rgb[2]+$rgbdiff; }

			#$colorout='#'.rgb2hex($red,$green,$blue);
			$colorout='rgb('.$red.','.$green.','.$blue.')';

		}

		return($colorout);
	}

	
	# 6
	$polylines[]="0,2,1";
	$polylines[]="1,1,1";
	$polylines[]="1,3,1";
	$polylines[]="1,2,2";
	$polylines[]="0,3,3";
	$polylines[]="0,2,4";
	$polylines[]="0,1,4";
	$polylines[]="1,0,4";
	# 4
	$polylines[]="2,3,1";
	$polylines[]="2,2,1";
	$polylines[]="2,1,1";
	$polylines[]="2,2,4";
	$polylines[]="2,0,4";
	$polylines[]="1,1,4";
	$polylines[]="2,3,4";
	# 0
	$polylines[]="3,1,1";
	$polylines[]="4,3,1";
	$polylines[]="4,0,2";
	$polylines[]="3,2,2";
	$polylines[]="3,3,3";
	$polylines[]="4,1,3";
	$polylines[]="4,2,4";
	$polylines[]="3,0,4";
	# x
	$polylines[]="6,1,1";
	$polylines[]="6,2,2";
	$polylines[]="5,1,3";
	$polylines[]="5,2,4";
	# 4
	$polylines[]="7,3,1";
	$polylines[]="7,2,1";
	$polylines[]="7,1,1";
	$polylines[]="7,2,4";
	$polylines[]="7,0,4";
	$polylines[]="6,1,4";
	$polylines[]="7,3,4";
	#8	
	$polylines[]="9,1,1";
	$polylines[]="9,3,1";
	$polylines[]="9,0,2";
	$polylines[]="9,2,2";
	$polylines[]="8,1,3";
	$polylines[]="8,3,3";
	$polylines[]="8,0,4";
	$polylines[]="8,2,4";
	# 0
	$polylines[]="10,1,1";
	$polylines[]="11,3,1";
	$polylines[]="11,0,2";
	$polylines[]="10,2,2";
	$polylines[]="10,3,3";
	$polylines[]="11,1,3";
	$polylines[]="11,2,4";
	$polylines[]="10,0,4";
	
	# $svgwidth=630;
	# $svgheight=210;

	$svgwidth=569;
	$svgheight=193;


	echo('<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" 
		 xmlns="http://www.w3.org/2000/svg" 
		 xmlns:xlink="http://www.w3.org/1999/xlink" 
		 viewBox="0 0 '.$svgwidth.' '.$svgheight.'">

	<defs>
		<style type="text/css">
				polyline {
					stroke:#fff;
					stroke-width:1px;
				}
		</style>
		<symbol id="triangle1"><polyline points="0 0 '.floor($svgwidth/12).' 0 0 '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle2"><polyline points="0 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle3"><polyline points="0 0 '.floor($svgwidth/12).' 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle4"><polyline points="'.floor($svgwidth/12).' 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 '.floor($svgheight/4).' '.floor($svgwidth/12).' 0" /></symbol>
	</defs>');
		foreach($polylines as $line) {
			$values=explode(',',$line);
			if(!isset($_GET['fldrid']) || ''==$_GET['fldrid']) {
				$folderid='813';
			} else {
				$folderid=$_GET['fldrid'];
			}
			$schwelle = mt_rand(0,1);
			if ('0.2'<$schwelle) { // 60% der Kacheln sollen die Originalfarbe haben
				$clr='rgb('.$GLOBALS['kwcolor'][$folderid].')';
			} else {
				$clr=getRandomColor($folderid);
			}


			echo('
	<use xlink:href="#triangle'.$values[2].'" x="'.($values[0]*floor($svgwidth/12)).'" y="'.($values[1]*floor($svgheight/4)).'" style="fill:'.$clr.';" />');
		}
		
		echo('
</svg>');
?>