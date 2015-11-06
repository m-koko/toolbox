<?php
  header('Content-type: image/svg+xml');
	function getRandomColor($fix) {
		$hex[1]="00";
		$hex[2]="33";
		$hex[3]="66";
		$hex[4]="99";
		$hex[5]="CC";
		$hex[6]="EE";
	
		switch($fix) {
			case 'mono':
				$level=$hex[mt_rand(1,6)];
				$color='#'.$level.$level.$level;
				break;
			case 'red':
				$red="FF";
				$green=$hex[mt_rand(1,5)];
				$blue=$hex[mt_rand(1,4)];
				$color='#'.$red.$green.$blue;
				break;
			case 'green':
				$red=$hex[mt_rand(1,4)];
				$green="FF";
				$blue=$hex[mt_rand(1,4)];
				$color='#'.$red.$green.$blue;
				break;
			case 'blue':
				$red=$hex[mt_rand(1,5)];
				$green=$hex[mt_rand(1,5)];
				$blue="FF";
				$color='#'.$red.$green.$blue;
				break;
			case 'yellow':
				$red=$hex[mt_rand(5,6)];
				$green=$hex[mt_rand(5,6)];
				$blue=$hex[mt_rand(1,4)];
				$color='#'.$red.$green.$blue;
				break;
			case 'magenta':
				$red=$hex[mt_rand(5,6)];
				$green=$hex[mt_rand(1,4)];
				$blue=$hex[mt_rand(5,6)];
				$color='#'.$red.$green.$blue;
				break;
			case 'cyan':
				$red=$hex[mt_rand(1,4)];
				$green=$hex[mt_rand(5,6)];
				$blue=$hex[mt_rand(5,6)];
				$color='#'.$red.$green.$blue;
				break;
			default:
				$color='#'.$hex[mt_rand(1,6)].$hex[mt_rand(1,6)].$hex[mt_rand(1,6)];
				break;	
		}
	
		return($color);
	}
		if(isset($_GET['clr'])&&''!=$_GET['clr']) {
			$clr=$_GET['clr'];
		}else{
			$clr="default";
		}
	
	
		# 6
		$polylines[]="0,2,1,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="1,1,1,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="1,3,1,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="1,2,2,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="0,3,3,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="0,2,4,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="0,1,4,".('default'==$clr?"cyan":$clr)."";
		$polylines[]="1,0,4,".('default'==$clr?"cyan":$clr)."";
		# 4
		$polylines[]="2,3,1,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="2,2,1,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="2,1,1,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="2,2,4,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="2,0,4,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="1,1,4,".('default'==$clr?"magenta":$clr)."";
		$polylines[]="2,3,4,".('default'==$clr?"magenta":$clr)."";
		# 0
		$polylines[]="3,1,1,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="4,3,1,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="4,0,2,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="3,2,2,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="3,3,3,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="4,1,3,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="4,2,4,".('default'==$clr?"yellow":$clr)."";
		$polylines[]="3,0,4,".('default'==$clr?"yellow":$clr)."";
		# x
		$polylines[]="6,1,1,".('default'==$clr?"mono":$clr)."";
		$polylines[]="6,2,2,".('default'==$clr?"mono":$clr)."";
		$polylines[]="5,1,3,".('default'==$clr?"mono":$clr)."";
		$polylines[]="5,2,4,".('default'==$clr?"mono":$clr)."";
		# 4
		$polylines[]="7,3,1,".('default'==$clr?"red":$clr)."";
		$polylines[]="7,2,1,".('default'==$clr?"red":$clr)."";
		$polylines[]="7,1,1,".('default'==$clr?"red":$clr)."";
		$polylines[]="7,2,4,".('default'==$clr?"red":$clr)."";
		$polylines[]="7,0,4,".('default'==$clr?"red":$clr)."";
		$polylines[]="6,1,4,".('default'==$clr?"red":$clr)."";
		$polylines[]="7,3,4,".('default'==$clr?"red":$clr)."";
		#8	
		$polylines[]="9,1,1,".('default'==$clr?"green":$clr)."";
		$polylines[]="9,3,1,".('default'==$clr?"green":$clr)."";
		$polylines[]="9,0,2,".('default'==$clr?"green":$clr)."";
		$polylines[]="9,2,2,".('default'==$clr?"green":$clr)."";
		$polylines[]="8,1,3,".('default'==$clr?"green":$clr)."";
		$polylines[]="8,3,3,".('default'==$clr?"green":$clr)."";
		$polylines[]="8,0,4,".('default'==$clr?"green":$clr)."";
		$polylines[]="8,2,4,".('default'==$clr?"green":$clr)."";
		# 0
		$polylines[]="10,1,1,".('default'==$clr?"blue":$clr)."";
		$polylines[]="11,3,1,".('default'==$clr?"blue":$clr)."";
		$polylines[]="11,0,2,".('default'==$clr?"blue":$clr)."";
		$polylines[]="10,2,2,".('default'==$clr?"blue":$clr)."";
		$polylines[]="10,3,3,".('default'==$clr?"blue":$clr)."";
		$polylines[]="11,1,3,".('default'==$clr?"blue":$clr)."";
		$polylines[]="11,2,4,".('default'==$clr?"blue":$clr)."";
		$polylines[]="10,0,4,".('default'==$clr?"blue":$clr)."";
		
		$svgwidth=630;
		$svgheight=210;

		echo('<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg
		version="1.1" 
		xmlns="http://www.w3.org/2000/svg" 
		xmlns:xlink="http://www.w3.org/1999/xlink" 
		x="0px"
		y="0px"
		viewBox="0 0 '.$svgwidth.' '.$svgheight.'"
		xml:space="preserve"
		>

	<defs>
		<style type="text/css">
				polyline {
					stroke:#fff;
					stroke-width:1px;
				}
				polyline:hover {
					stroke:#000;
					opacity:0.2;
				}
				rect {
				}
				rect:hover {
					opacity:0.2;
				}
		</style>
		<symbol id="triangle1"><polyline points="0 0 '.floor($svgwidth/12).' 0 0 '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle2"><polyline points="0 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle3"><polyline points="0 0 '.floor($svgwidth/12).' 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 0" /></symbol>
		<symbol id="triangle4"><polyline points="'.floor($svgwidth/12).' 0 '.floor($svgwidth/12).' '.floor($svgheight/4).' 0 '.floor($svgheight/4).' '.floor($svgwidth/12).' 0" /></symbol>
	</defs>');
		foreach($polylines as $line) {
			$values=explode(',',$line);
			$clr=getRandomColor($values[3]);
			
			echo('
	<use xlink:href="#triangle'.$values[2].'" x="'.($values[0]*floor($svgwidth/12)).'" y="'.($values[1]*floor($svgheight/4)).'" style="fill:'.$clr.';" />');
		}
		
		echo('
</svg>');
?>