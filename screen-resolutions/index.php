<?php
  header('Content-type: image/svg+xml');

	$resolutions=array(
		'15-inch Apple MacBook Pro with Retina display'	=>'2880,1800',
		'13-inch Apple MacBook Pro with Retina display, Nexus 10 (WQXGA)' => '2560,1600',
		'27-inch Apple iMac 10,2 / 11,1 / 11,3 / 12,2 (Late 2009 - 2012) ((W)QHD)' => '2560,1440',
		'Apple iPad 3 (QXGA)' => '2048,1536',
		'24-inch Apple iMac 6,1 / 7,1 / 8,1 / 9,1(Late 2006 - Early 2009), Asus Transformer Pad Infinity (WUXGA)' => '1920,1200',
		'Large 16:9 desktop screen resolution, 21.5-inch Apple iMac 10,1 / 11,2 / 12,1 (Late 2009 - Mid 2011), Microsoft Surface with Windows 8 Pro (FHD)' => '1920,1080',
		'20-inch Apple iMac 4,1 / 5,1 / 7,1 / 8,1 / 9,1 (Early 2006 - Early 2009) (WSXGA+)' => '1680,1050',
		'Large 4:3 desktop screen resolution (UXGA)' => '1600,1200',
		'13 inch Apple Macbook Air, Medium 16:10 desktop/laptop screen resolution (HD+)' => '1600,900',
		'13.3 inch Apple Macbook Air, Medium 16:10 desktop/laptop screen resolution, 17-inch Apple iMac 4,1 / 5,2 (Early 2006 - Late 2006), Barnes &amp; Noble NOOK HD (WXGA+)' => '1440,900',
		'11.6 inch Apple Macbook Air, ASUS Eee PC VX6 Lambourghini, Samsung N350, Small 16:9 desktop/laptop screen resolution, Microsoft Surface with Windows RT, Samsung Series 3 Chromebook (WXGA)' => '1366,768',
		'Standard 4:3 desktop screen resolution (SXGA)' => '1280,1024',
		'Samsung Galaxy Tab 7.1 &amp; 8.9, Samsung Galaxy Note, ASUS Eee Pad Transformer &amp; Transformer Prime, Sony Tablet S, Motorola Zoom, Nexus 7, Kindle Fire HD (WXGA)' => '1280,800',
		'Samsung Galaxy Tab 10.1, Nexus 4, Nokia Lumia 920, LG Optimus G &amp; LG Optimus 4X HD (WXGA)' => '1280,768',
		'Samsung Galaxy Nexus, Sony Xperia S, High resolution netbooks such as Acer Aspire One 522, Samsung Galaxy S III, Samsung Galaxy Note II, Motorola DROID RAZR HD &amp; MAXX HD, HTC Windows Phone 8X &amp; 8S, HTC One,&amp; X+ &amp; XL (HD/WXGA)' => '1280,720',
		'Apple iPad 1&amp; 2, HP TouchPad, Apple iPad Mini (XGA)' => '1024,768',
		'Standard netbook/tablet resolution includes: Amazon Kindle Fire, Blackberry Playbook, Viewsonic Viewpad 10, Samsung Galaxy Tab (WSVGA)' => '1024,600',
		'Apple iPhone 5, Apple iPod Touch (5th generation)' => '1136,640',
		'Apple iPhone 4 &amp; 4S, Apple iPod Touch (4th generation) (DVGA)' => '960,640',
		'HTC Sensation HTC Evo 3D, Motorola Bionic, Atrix &amp; Droid RAZR, Motorola RAZR i &amp; Photon Q, HTC One S (qHD)' => '960,540',
		'Sony Ericsson Xperia Arc, Arc S, X10, J &amp; U, Nokia N9, Motorola Milestone and Milestone 2, Sony Xperia J (FWVGA)' => '854,480',
		'Samsung Galaxy I, II and S Samsung Nexus S, HTC Desire, Desire HD, Desire S &amp; Desire X, HTC Evo HTC Sensation XL, HTC One V, BlackBerry Torch 9860, Blackberry Storm 3, Nokia Lumia 800 &amp; 900, Viewsonic Viewpad 7, LG Optimus 2X &amp; 3D (WVGA)' => '800,480',
		'Blackberry Bold 9900 &amp; Torch 9810 (VGA)' => '640,480',
		'Nokia N8, N97, E7 and X6 amongst others (nHD)' => '640,360',
		'BlackBerry Curve, Storm, Torch 9800 &amp; Bold incl. 9700, Sony Ericsson Vivaz' => '480,360',
		'Apple iPhone 3G &amp; 3GS, Apple iPod touch (1st, 2nd &amp; 3rd generation), BlackBerry Bold 9000, Samsung Galaxy Ace, LG Optimus One, HTC Desire C (HVGA)' => '480,320',
		'Many generic feature phones including: Samsung Star &amp; Star II (WQVGA)' => '400,240',
		'Blackberry Curve, Samsung Tocco, HTC Wildfire, Nokia E71, Very common low res (QVGA)' => '320,240',
		);

		echo('<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg
		version="1.1" 
		xmlns="http://www.w3.org/2000/svg" 
		xmlns:xlink="http://www.w3.org/1999/xlink" 
		x="0px"
		y="0px"
		viewBox="0 0 2900 2000"
		preserveAspectRatio="xMidYMid meet"
		>
		<style>
			text {
				font-size:35px;
				font-family: Arial, sans-serif;
    		fill:#000;
			}
			text:hover {
    		fill:#fff;
  		}
		</style>');

	$colors=array('#ff0000','#00ff00','#0000ff','#ffff00','#00ffff','#ff00ff');	


	foreach($resolutions as $key => $value) {
		$dimension=explode(',',$value);
		echo ('
		<rect x="0" y="0" width="'.$dimension[0].'" height="'.$dimension[1].'" style="fill:'.('1280,1024'==$value?'#000;fill-opacity:0.8;':$colors[mt_rand(0,5)].';fill-opacity:0.3;').'stroke-width:1;stroke:#fff;">
			<set attributeName="fill-opacity" to="1.0" 	begin="id'.str_replace(',','',$value).'.mouseover" end="id'.str_replace(',','',$value).'.mouseout"/>
		</rect>');
		if('1280,1024'==$value && $_GET['image']=='show'){
			echo('
   	<image x="0" y="0" width="1280" height="1024" xlink:href="praxis-kohlhaas.1280x1024.jpg" />');
		}
	}

	echo ('
		<rect id="textbg" x="'.(2880-300).'" y="10" width="290" height="1760" style="fill:#fff;fill-opacity:0.3;stroke-width:1;stroke:#fff;"/>');

	$y=40;
	foreach($resolutions as $key => $value) {
		$dimension=explode(',',$value);
		echo ('
			<text id="id'.str_replace(',','',$value).'"  x="'.(2880-280).'" y="'.$y.'">'.$dimension[0].'×'.$dimension[1].'</text>
			<text id="nfo'.str_replace(',','',$value).'" x="0" y="'.(1880).'" style="font-size:26px;fill-opacity:0;">
				'.$key.'
				<set attributeName="fill-opacity" to="1.0" begin="id'.str_replace(',','',$value).'.mouseover" end="id'.str_replace(',','',$value).'.mouseout"/>
			</text>

		');
		$y=($y+40);
	}

   echo('
	</svg>');
?>
