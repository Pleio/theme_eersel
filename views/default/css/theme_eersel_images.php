<?php
?>
#theme-eersel-images-logo,
#theme-eersel-images-plant,
#theme-eersel-images-potlood-inloggen,
#theme-eersel-images-potlood-weten,
#theme-eersel-images-potlood,
#theme-eersel-images-textbook {
	position: absolute;
}


#theme-eersel-images-logo-container {
	width: 208px;
	margin: 0 auto;
}

#theme-eersel-images-logo {
	background: url('<?php echo THEME_GRAPHICS; ?>logo.png') no-repeat;
	height: 128px;
    width: 208px;
    top: 20px;
}

#theme-eersel-images-plant {
	background: transparent url('<?php echo THEME_GRAPHICS; ?>plant.png') no-repeat scroll 780px 0px;
	width: 100%;
	height: 528px;
	top: 0px;    
}

#theme-eersel-images-textbook {
	background: url('<?php echo THEME_GRAPHICS; ?>textbook.png') no-repeat scroll 0px 0px;
	
    top: 170px;
    width: 1495px;
	height: 771px;
	display: none;
}

#theme-eersel-images-potlood-container {
	width: 407px;
	margin: 0 auto;
	position: relative;
}

#theme-eersel-images-potlood-inloggen {
	background: url('<?php echo THEME_GRAPHICS; ?>potlood_inloggen.png') no-repeat scroll 0px 0px;
	top: 0px;
    width: 407px;
	height: 247px;
}

#theme-eersel-images-potlood-weten {
	background: url('<?php echo THEME_GRAPHICS; ?>potlood_weten.png') no-repeat scroll 0px 0px;
	height: 247px;
    left: -90px;
    top: 58px;
    width: 570px;
}

#theme-eersel-images-potlood {
	background: url('<?php echo THEME_GRAPHICS; ?>potlood.png') no-repeat scroll 0px 0px;
	height: 247px;
    right: -73px;
    top: 58px;
    width: 114px;
}

@media (min-width: 1495px) {

	#theme-eersel-images-plant {
		right: 0px;
		background-position: top right;
	}

	#theme-eersel-images-textbook {
		display: block;	
	}
}
