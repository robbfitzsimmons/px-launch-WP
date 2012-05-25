<?php
/**
 * Premium Theme Options CSS (Premium)
 *
 * Contains user-defined style values for premium features and the theme.
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
?>

<style type="text/css">

/* THEME - LEARN MORE TAB */

#learn-more-tab {
	margin:10px auto 0px auto;
	overflow: hidden;
	
	<?php 
	if(get_option('container_position') == 'left') { 
		echo 'margin:10px 0 0 30px;'; 
	} elseif(get_option('container_position') == 'right') {
		echo 'float:right; margin:10px 30px 0 0;';
	} else {
		echo 'margin:10px auto 0 auto;'; 
	} 
	
	if(get_option('container_width') == 'medium') {
		echo 'width: 590px;';
	} elseif(get_option('container_width') == 'large') {
		echo 'width: 780px;';
	} else {
		echo 'width:400px;';
	}
	?>
}

a#learn-more {
	display: block;
	padding: 8px 40px;
	width: auto;
	display: block;
	float: right;
	margin-right: 40px;
	text-decoration: none;
	font-size:1.5em;
	-moz-transition: background-color 0.2s linear;
	-webkit-transition: background-color 0.2s linear;
	-o-transition: background-color 0.2s linear;
	background:<?php echo '#'; le('lefx_pages_learnmoretab_bgcolor'); ?>;
	color:<?php echo '#'; le('lefx_pages_learnmoretab_color'); ?>;
	font-size:<?php echo ler('lefx_pages_learnmoretab_size') . 'em'; ?>;
	font-family:<?php legogl('lefx_pages_learnmoretab_font_goog', 'lefx_pages_learnmoretab_font'); ?>;	
}

a#learn-more:hover {
	-moz-transition: background-color 0.2s linear;
	-webkit-transition: background-color 0.2s linear;
	-o-transition: background-color 0.2s linear;
	background:<?php echo '#' . darker('lefx_pages_learnmoretab_bgcolor'); ?>;
}


/* LAUNCH MODULE - CUSTOM FIELDS */ 

.radio-group label, 
.checkbox-group label {
	font-size:<?php echo ler('description_size') . 'em'; ?> !important;
	font-family:<?php legogl('description_font_goog', 'description_font'); ?> !important;
	font-weight:<?php echo ler('description_weight'); ?> !important;
}

#signup-page .radio-group label, 
#signup-page .checkbox-group label {
	color:<?php echo '#'; le('description_color'); ?> !important;
}

	
/* LAUNCH MODULE - CUSTOM FIELDS - SPECIAL MEDIUM LAYOUT */

#signup.medium.hascf #error, 
#signup.medium .error {
	left:200px;
}

#signup.medium.hascf span.privacy-policy {
	margin-left:200px;
}

#signup.medium.hascf label {
	float:left;
	margin:0;	
	width: 175px;
	padding-right: 25px;
}

#signup.medium.hascf a#reusertip {
	float:none;
/* 	display:block; */
}

#signup.medium.hascf #reuserbubble {
/* 	left:0 !important; */
}

#signup.medium.hascf ul#form-layout {
	margin-top:35px;
}

#signup.medium.hascf ul#form-layout li {
	margin:0 0 35px 0;
	padding-top:12px;
	border-top:1px solid <?php echo '#'; le('lefx_secondarycolor'); ?>;
}

#signup.medium.hascf input[type=text], 
#signup.medium.hascf textarea {
	width: 288px;
	min-width:288px; 
	max-width:288px; 
}

#signup.medium.hascf .radio-group,
#signup.medium.hascf .checkbox-group {
	display: block;
	overflow: hidden;
	height: 20px;
	width: 310px;
	float: right;
}

#signup.medium.hascf .radio-group input, 
#signup.medium.hascf .checkbox-group input {
	margin: 1px 0 0 1px;
}

#signup.medium.hascf select {
	margin-top:2px;
	width: 310px;
}

#signup.medium.hascf span#submit-button-border,
#signup.medium.hascf input#submit-button-loader {
	margin:0 0 0 200px;
}


/* LAUNCH MODULE - PROGRESS INDICATORS */

#progress-container {
	width:100%;
	margin:0 auto 40px auto;
	background:url('<?php bloginfo('template_url'); ?>/im/social-bg.png') repeat;
	border-radius:3px;
	overflow:hidden;
	padding:20px 0;
}

#progress-container h3 {
	font-family:<?php legogl('subheading_font_goog', 'subheading_font'); ?>;
	font-size:<?php echo ler('lefx_progtitlesize') . 'em'; ?>;
	font-weight:<?php lewt('lefx_progtitlestyle'); ?>;
	font-style:<?php lestyle('lefx_progtitlestyle'); ?>;
	color:<?php echo '#'; le('lefx_progtitlecolor'); ?>;
	text-align:center;
	margin:0 0 20px 0;
}


/* Progress: Countdown Timer */

#tearoff {
	overflow:hidden;
	margin:20px auto 0 auto;
	width:308px;
	opacity:0;
}

.tearoff {
	position:relative;
	float:left;
	width:77px;
	height:auto;
	overflow:hidden;
}

.tearoff .overlay {
	position:absolute;
	top:0;
	left:0;
	height:77px;
	width:77px;
	display:block;
}

.stylish.fliplight .tearoff .overlay {
	background:url('<?php bloginfo('template_url'); ?>/im/progress/ov_light.png') no-repeat top left;
}

.stylish.flipdark .tearoff .overlay {
	background:url('<?php bloginfo('template_url'); ?>/im/progress/ov_dark.png') no-repeat top left;
}

.tearoff .background {
	height:65px;
	width:77px;
	display:block;
	font-size:5.4em;
	text-align:center;
	font-family:Arial;
	letter-spacing: -0.06em;
	padding: 12px 0 0 0;
}

#tearoff.threedigits .background {
	font-size:4.3em;
	padding: 19px 0 0 0;
}

.simple .tearoff .background {
	background:<?php echo '#'; le('lefx_progcountbg'); ?> !important;
	color:<?php echo '#'; le('lefx_progcountnum'); ?> !important;
	border-radius:4px;
	height:61px;
	width:69px;
	margin:0 4px;
	padding:11px 0 0 0;
}

.simple.fliplight .tearoff .background {
	background:#FFF;
	color:#222;
}

.simple.flipdark .tearoff .background {
	background:#222;
	color:#FFF;
}

.stylish.fliplight .tearoff .background {
	background:url('<?php bloginfo('template_url'); ?>/im/progress/bg_light.png') no-repeat top left;
	color:#222;
	text-shadow: 0px 2px 1px #FFF;
}

.stylish.flipdark .tearoff .background {
	background:url('<?php bloginfo('template_url'); ?>/im/progress/bg_dark.png') no-repeat top left;
	color:#FFF;
	text-shadow: 0px 1px 2px #222;
}

.tearoff .unit {
	color: <?php echo '#'; le('lefx_progtitlecolor'); ?>;
	display: block;
	margin-top: 2px;
	text-align: center;
	font-size: 1em;
	font-weight: bold;
	font-family: Arial;
	color: #333;
}


/* Progress: Bar Chart */

#bar {
	position:relative;
	overflow:hidden;
	width:80%;
	height:23px;
	margin:0px auto;
	background:white;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}

#bar.stylish {
	border:1px solid #999;
	-webkit-box-shadow: inset 0px -5px 12px 0px #bbb;
	-moz-box-shadow: inset 0px -5px 12px 0px #bbb;
	box-shadow: inset 0px -5px 12px 0px #bbb;
}

#bar-complete {
	background:<?php echo '#'; le('lefx_progbarcolor'); ?>;
	position:absolute;
	top:0px;
	left:0px;
	height:23px;
	min-width:35px !important;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}

<?php $barInset = 'inset 0px 1px 0px 0px #' . lighter('lefx_progbarcolor') . ', inset 0px -5px 8px 0px #' . darker2('lefx_progbarcolor'); ?>
#bar.stylish #bar-complete {
	-webkit-box-shadow: <?php echo $barInset; ?>;
	-moz-box-shadow: <?php echo $barInset; ?>;
	box-shadow: <?php echo $barInset; ?>;
	position:absolute;
	top:-1px;
	left:-1px;
	border:1px solid #999;
}

#bar-complete span {
	color:<?php echo '#' . blacknwhite('lefx_progbarcolor'); ?>;
	display:block;
	text-align:right;
	color:#222;
	font-size:1.2em;
	font-weight:bold;
	padding:5px 8px 0 0;
	opacity:0;
}

#bar.stylish #bar-complete span {
	text-shadow: 0px 1px 2px #ccc;
}


/* THEME: WRAPPER */

#wrapper {
<?php if(leimg('lefx_pages_container_bgimg','lefx_pages_container_bgimg_disable', 'pages_options')) { ?>
	background-image:url('<?php echo leimg('lefx_pages_container_bgimg','lefx_pages_container_bgimg_disable', 'pages_options'); ?>'); 
	background-color:transparent;
<?php } else { ?><?php if(ler('lefx_pages_container_bgcolor')) { ?>
	background-color: <?php echo '#' . ler('lefx_pages_container_bgcolor'); ?>; <?php } ?><?php } ?>
<?php if(get_option('lefx_pages_container_effects') == 'dropshadow') { echo $dropShadow; } elseif(get_option('lefx_pages_container_effects') == 'glow') { echo $glow; } else { echo $noShadow; } ?>
<?php if(ler('lefx_pages_tab_disable') == true):?>
	margin-top:40px;
<?php endif; ?>
	width:700px;
	margin:0px auto 60px auto;
	padding:40px 40px 40px 40px;
	overflow:hidden;
}

#wrapper header {
	width:700px;
	margin-bottom:40px;
}

#wrapper header h1 {	
	font-family:<?php legogl('lefx_pages_textlogo_font_goog', 'lefx_pages_textlogo_font'); ?>;
	font-weight:<?php lewt('lefx_pages_textlogo_size'); ?>;
	font-style:<?php lestyle('lefx_pages_textlogo_style'); ?>;
	color:<?php echo '#'; le('lefx_pages_textlogo_color'); ?>;
	text-shadow: <?php if(get_option('lefx_pages_textlogo_effects') == 'letterpress') { echo $letterPress; } elseif(get_option('lefx_pages_textlogo_effects') == 'shadow') {echo $textShadow;} else {echo 'none'; } ?>;	
	text-align:<?php echo ler('lefx_pages_textlogo_alignment'); ?>;
	font-size:<?php echo ler('lefx_pages_textlogo_size') . 'em'; ?>;
	margin:0;
	position:relative;
}

#wrapper header h1.hastextheading.haslogo {
	/* js sets the padding-top here based on image height */
}

#wrapper header h1.notextheading.haslogo {
	/* js sets the height here based on image height */
	text-indent:-9999px;
}

#wrapper header h1.notextheading.nologo {
	display:none;
	margin:0;
}

#wrapper header img#logoHeight {
	display:none;
}

#wrapper header h1 a {
	color:<?php echo '#'; le('lefx_pages_textlogo_color'); ?>;
	text-decoration: none;
}

#wrapper header h1 span {
<?php if(leimg('lefx_pages_logo','lefx_pages_logo_disable', 'pages_options')) { ?>
	background:url('<?php echo leimg('lefx_pages_logo','lefx_pages_logo_disable', 'pages_options'); ?>') no-repeat top <?php echo ler('lefx_pages_logo_alignment'); ?>;
<?php } ?>
	position:absolute;
	top:0px;
	left:0px;
	height:100%;
	width:100%; 
}

#hero {
	margin:0 0 30px 0;
}

#sidebar {
	float:left;
	width:190px;
	margin:0 40px 0 0;
}


/* THEME: NAV & WIDGET STYLING */

nav ul {
	margin:0 0 40px 0;
}

nav ul li, 
nav ul li ul li {
	margin:0 0 0.8em 0;
}

nav ul li ul {
	margin:0.8em 0 0 12px;
	font-size:0.8em;
}

nav a:link,
nav a:visited,
nav li.current_page_item ul li a,
ul#widgets li ul li a:link,
ul#widgets li ul li a:visited,
.tagcloud a:link,
.tagcloud a:visited {
	font-family:<?php legogl('lefx_pages_nav_font_goog', 'lefx_pages_nav_font'); ?>;
	font-size:<?php echo ler('lefx_pages_nav_size') . 'em'; ?>;
	font-weight:<?php lewt('lefx_pages_nav_style'); ?>;
	font-style:<?php lestyle('lefx_pages_nav_style'); ?>;
	-moz-transition: color 0.2s linear;
	-webkit-transition: color 0.2s linear;
	-o-transition: color 0.2s linear;
	color:<?php echo '#'; le('lefx_pages_nav_color'); ?>;	
	text-transform:<?php echo ler('lefx_pages_nav_case'); ?>;
}

nav a {
	text-decoration:none !important;
}

nav a:hover,
nav a:active,
ul#widgets li ul li a:hover,
ul#widgets li ul li a:active,
.tagcloud a:hover,
.tagcloud a:active {
	-moz-transition: color 0.2s linear;
	-webkit-transition: color 0.2s linear;
	-o-transition: color 0.2s linear;
	color:<?php echo '#'; le('lefx_pages_nav_colorhover'); ?>;	
}

ul#widgets {
	list-style-type:none;
	padding:0;
}

ul#widgets li.widget-container {
	margin:0 0 30px 0;
}

ul#widgets li ul {
	list-style-type:square;
	margin-left:18px;
}

ul#widgets li ul li {
	margin:0 0 6px 0;
	font-size:1.2em !important;
}

ul#widgets li ul li a {
	font-family:<?php legogl('lefx_pages_bodytext_font_goog', 'lefx_pages_bodytext_font'); ?> !important;	
	font-size:inherit !important;
	text-decoration:none !important;
}

/* Widget: Search */

#SearchForm {
	float:left;
	border:solid 1px #aaa;
	width:188px;
	height:34px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	margin:0 0 30px 0;
}

#SearchForm form {
	margin:0;
	padding:0;
}

#SearchForm input.le-search {
	float: left;
	width: 135px;
	display:block;
	padding:10px 10px;
	border:0;
	background: transparent;
	border-image: initial;
	font-size:1.2em;
	font-style:italic;
	line-height:1.3em;
}

:focus{
	outline:0;
}

#SearchForm input:focus {
	outline-offset:0;
	font-style:normal;
}

#SearchForm input.search-button {
	float:right;
	background:url('<?php bloginfo('template_url'); ?>/im/search-icon.png') no-repeat 0 0;
	width:14px;
	height:14px;
	margin:10px 10px 0 0;
	padding:10px;
	border:0;
	cursor: pointer;
	text-indent:-9999px;
}

/* Widget: Tagcloud */

.tagcloud a {
	text-decoration: none;
}

/* Widget: Recent Comments */
ul#recentcomments {	
	font-style:italic;
}

/* Widget: Calendar */
.widget_calendar {float: left;}
#wp-calendar {width: 100%; position:relative;}
#wp-calendar a {text-decoration: none; color:#222;}
#wp-calendar caption { text-align: center; color: #333; font-size: 1em; margin-top: 10px; margin-bottom: 15px; font-weight:bold; text-transform: uppercase; }
#wp-calendar thead { font-size: 1em; font-weight:bold; color:#888; }
#wp-calendar thead th { padding-bottom: 10px; }
#wp-calendar tbody { color: #aaa; }
#wp-calendar tbody td { 
	border-color: <?php echo '#'; le('lefx_pages_container_bgcolor'); ?>;
	background: #f5f5f5; 
	border: 1px solid #fff; 
	text-align: center; 
	padding:7px;}
#wp-calendar tbody .pad { background: none; }
#wp-calendar tfoot #next { font-size: 0.9em; text-transform: uppercase; position:absolute; top:11px; right:0px; }
#wp-calendar tfoot #next a, #wp-calendar tfoot #prev a {text-decoration: none; font-weight:bold; color:#888;}
#wp-calendar tfoot #prev { font-size: 0.9em; text-transform: uppercase; position:absolute; top:11px; left:0px; }



/* THEME: POST WRAPPER */

#main {
	float:left;
	width:470px;
}

#main a:link, 
#main a:visited {
	color:<?php echo '#'; le('lefx_pages_links_color'); ?>;
	text-decoration:<?php if(ler('lefx_pages_links_underline') == true) { echo 'underline'; } else { echo 'none'; } ?>;
}

#respond input[type=submit] {
	background-color:<?php echo '#'; le('lefx_pages_links_color'); ?>;
}

#main a:hover, 
#main a:active,
.lepost h2 a:hover {
	color:<?php echo '#'; le('lefx_pages_links_colorhover'); ?>;
	text-decoration:<?php if(ler('lefx_pages_links_underline') == true || ler('lefx_pages_links_underlinehover') == true) { echo 'underline'; } else { echo 'none'; } ?>;
}


/* THEME: POST */

.lepost {
	margin:0 0 50px 0;
}

.lepost h1, 
.lepost h2 {
	font-family:<?php legogl('lefx_pages_h2_font_goog', 'lefx_pages_h2_font'); ?>;
	font-size:<?php echo ler('lefx_pages_h2_size') . 'em'; ?>;
	font-weight:<?php lewt('lefx_pages_h2_style'); ?>;
	font-style:<?php lestyle('lefx_pages_h2_style'); ?>;
	color:<?php echo '#'; le('lefx_pages_h2_color'); ?>;
	text-shadow: <?php if(get_option('lefx_pages_h2_effects') == 'letterpress') { echo $letterPress; } elseif(get_option('lefx_pages_h2_effects') == 'shadow') {echo $textShadow;} else {echo 'none'; } ?>;
	text-transform:<?php echo ler('lefx_pages_h2_case'); ?>;
	line-height:1.2em;
	margin:0 0 10px 0;
}

.lepost h2 a {
	color:<?php echo '#'; le('lefx_pages_h2_color'); ?>  !important;
	text-decoration:none;
}

.lepost h2.posttitle {
	margin:0;
}

.entry-date {
	text-transform: uppercase;
	font-size:1.1em;
	display:inline-block;
	font-weight:bold;
	margin:0 0 20px 0;
	font-family: Arial, Helvetica, sans-serif;
}

.lepost h3 {
	font-family:<?php legogl('lefx_pages_h3_font_goog', 'lefx_pages_h3_font'); ?>;
	font-size:<?php echo ler('lefx_pages_h3_size') . 'em'; ?>;
	font-weight:<?php lewt('lefx_pages_h3_style'); ?>;
	font-style:<?php lestyle('lefx_pages_h3_style'); ?>;
	color:<?php echo '#'; le('lefx_pages_h3_color'); ?>;
	text-shadow: <?php if(get_option('lefx_pages_h3_effects') == 'letterpress') { echo $letterPress; } elseif(get_option('lefx_pages_h3_effects') == 'shadow') {echo $textShadow;} else {echo 'none'; } ?>;
	text-transform:<?php echo ler('lefx_pages_h3_case'); ?>;
	line-height:1.2em;
	margin:0 0 10px 0;
}

.lepost h4,
h3.widget-title {
	font-family:<?php legogl('lefx_pages_h4_font_goog', 'lefx_pages_h2_font'); ?>;
	font-size:<?php echo ler('lefx_pages_h4_size') . 'em'; ?>;
	font-weight:<?php lewt('lefx_pages_h4_style'); ?>;
	font-style:<?php lestyle('lefx_pages_h4_style'); ?>;
	color:<?php echo '#'; le('lefx_pages_h4_color'); ?>;
	text-shadow: <?php if(get_option('lefx_pages_h4_effects') == 'letterpress') { echo $letterPress; } elseif(get_option('lefx_pages_h4_effects') == 'shadow') {echo $textShadow;} else {echo 'none'; } ?>;
	text-transform:<?php echo ler('lefx_pages_h4_case'); ?>;
	line-height:1.2em;
	margin:0 0 10px 0;
	text-transform: uppercase;
}

h3.widget-title {
	margin:0 0 5px 0;
}

.lepost p,
li.comment {
	line-height:1.6em;
	margin:0 0 25px 0;
}

.lepost p,
.lepost ul li,
.lepost ol li,
ul#widgets li ul li {
	font-size:<?php echo ler('lefx_pages_bodytext_size') . 'em'; ?>;
	font-weight:<?php echo ler('lefx_pages_bodytext_weight'); ?>;
	font-family:<?php legogl('lefx_pages_bodytext_font_goog', 'lefx_pages_bodytext_font'); ?>;
}

.lepost ul {
	list-style-type:square;
	margin:0 0 25px 0;
	padding:0;
}

.lepost ol {
	list-style-type:decimal;
	margin:0 0 25px 0;
	padding:0;
}

.lepost ul li,
.lepost ol li {
	margin:0 0 0 15px;
	padding:0;
	line-height:1.4em;
}

.lepost .alignleft {
	float:left;
	margin:0 15px 0 0;
}

.lepost .alignright {
	float:right;
	margin:0 0 0 15px;
}

.lepost img {
	margin:0 0 15px 0;
}

.lepost .wp-caption {
	margin:0 0 25px 0;
}

.lepost .wp-caption p {
	font-size:12px;
	font-style:italic;
	color:#888;
	margin-top:-10px;
}

.lepost .postmeta {
	margin:15px 0 0 0;
	padding:10px 0;	
	border-top:1px dotted #999;
	border-bottom:1px dotted #999;
}

.lepost .postmeta p {
	font-size:1.1em;
	margin:0;
	font-family: Arial, Helvetica, sans-serif;
}

.lepost code {
	font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
	background:#eee;
	padding:20px;
	display:block;
	font-size:13px;
}

.lepost blockquote {
	padding: 0 15px;
	margin: 0 30px 30px 30px;
	border-left: 3px solid #DDD;
	text-align: justify;
}

.lepost .gallery-item {
	text-align:left !important;
}

.lepost .gallery-item img {
	border: none !important;
}

#main p, 
#main ul li,
#main ol li,
ul#widgets li ul li,
cite,
#SearchForm input.le-search:focus,
#respond h3,
#respond input,
#respond textarea:focus {
	color:<?php echo '#'; le('lefx_pages_bodytext_color'); ?> !important;
}


/* THEME - BORDER COLOR */

.lepost .postmeta,
#SearchForm,
.commentlist,
.commentlist li.comment,
.commentlist .children li,
#comments .pingback,
#respond input,
#respond textarea,
li.recentcomments {
	border-color:<?php echo '#'; le('lefx_pages_container_bordercolor'); ?>;
}


/* THEME - ACCENT COLOR */

h3.widget-title,
nav li.current_page_item a {
	color:<?php echo '#'; le('lefx_pages_container_accentcolor'); ?>;
}

#respond input[type=submit]:hover {
	background-color:<?php echo '#'; le('lefx_pages_container_accentcolor'); ?>;
}

#respond input:focus,
#respond textarea:focus,
.lepost blockquote {
	border-color:<?php echo '#'; le('lefx_pages_container_accentcolor'); ?> !important;
}


/* THEME - SECONDARY COLOR */

.lepost .wp-caption p,
.entry-date,
#SearchForm input.le-search,
.comment-author,
#main a.comment-permalink,
#main a.comment-reply-link,
#main a.comment-reply-login,
#comments .pingback p,
#previous-comments,
#next-comments,
#respond label,
#respond p.comment-messages,
#respond textarea,
#wp-calendar thead,
#wp-calendar tbody,
#wp-calendar tfoot #next a, 
#wp-calendar tfoot #prev a {
	color:<?php echo '#'; le('lefx_pages_container_secondarycolor'); ?> !important;
}


/* COMMENTS */

#comments {
	clear: both;
}

#comments .navigation {
	padding: 0 0 18px 0;
}

.commentlist {
	list-style-type: none;
	margin: 0;
	border-top:2px solid #e7e7e7;
}

.commentlist li.comment {
	border-top: 1px solid #e7e7e7;
	margin: 0 0 40px 0;
	padding: 10px 0 0px 56px;
	position: relative;
	font-size:12px;
}

#comments .comment-body ul,
#comments .comment-body ol {
	margin-bottom: 18px;
}

#comments .comment-body p:last-child {
	margin-bottom: 6px;
}

#comments .comment-body blockquote p:last-child {
	margin-bottom: 24px;
}

.commentlist .avatar {
	position: absolute;
	top: 14px;
	left: 0;
}

.comment-author {
	color:#888
}

.comment-author cite {
	display:inline-block;
	margin:0 0 6px 0;
}


#main a.comment-permalink,
#main a.comment-reply-link,
#main a.comment-reply-login {
	color:#888 !important;
}

#main a.comment-reply-link,
#main a.comment-reply-login {
	float:right;
}

.commentlist .children {
	list-style: none;
	margin: 20px 0 0 0;
}

.commentlist .children li {
	border-top:1px solid #e7e7e7;
	padding-top:10px;
	margin: 0 0 20px 0;
}

.nopassword,
.nocomments {
	display: none;
}

#comments .pingback {
	border-top: 1px solid #e7e7e7;
	margin: 0 0 40px 0;
	padding: 10px 0 0px 0px;
}

.commentlist li.comment+li.pingback {
	margin-top: -6px;
}

#comments .pingback p {
	color: #888;
	display: block;
	font-size: 12px;
	line-height: 18px;
	margin: 0;
}

#comments .pingback .url {
	font-size: 13px;
	font-style: italic;
}

#previous-comments {
	float:left;
	font-size:1.1em;
	color:#888;
	margin-top:20px;
}

#next-comments {
	float:right;
	font-size:1.1em;
	color:#888;
	margin-top:20px;
}


/* COMMENT FORM */

#commentsform-hidden {
	display:none;
}

#respond {
	margin: 0 0 15px 0;
	overflow: hidden;
	position: relative;
}

#respond h3 {
	font-size:1.2em;
	margin:0 0 10px 0;
	font-weight:bold;
	text-transform: uppercase;
}

#respond p {
	margin: 0;
}

#respond p {
	margin:0 0 15px 0;
	overflow:hidden;
}

#respond p.left {
	float:left;
	width:230px;
	overflow:hidden;
}

#respond p.right {
	float:right;
	width:230px;
	overflow:hidden;
}

#respond p.comment-messages {
	line-height:15px;
}

#respond label,
#respond p.comment-messages {
	color: #888;
	font-size: 11px;
	display:block;
	margin:0 0 5px 0;
}

#respond input,
#respond textarea {
	background:none;
	border:1px solid #aaa;
	padding:15px 20px;
	width:428px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	overflow:hidden;
	font-size:1.2em;
	color:#222;
	font-style:normal;
	line-height:1.3em;
	float:left;
	outline:none;
}

#respond input#email {
	width:186px;
}

#respond input#author {
	width:186px;
}

#respond textarea {
	color:#999;
	font-style:italic;
	width:428px;
	height:46px;
}

#respond input:focus,
#respond textarea:focus {
	border-color:
	outline:0;
}

#respond textarea:focus {
	color:#222;
	font-style:normal;
}

#respond input[type=submit] {
	float:right;
	width:auto;
	border:none;
	font-family:Arial;
	background: #E5576C;
	color: white !important;
	padding: 15px 20px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	cursor:hand;
}

#respond input[type=submit]:hover {
	background:blue;
}


/* THEME - SIGN-UP TAB */

#launchtab {
	border-bottom:6px solid <?php echo '#'; le('lefx_pages_tab_bg_color'); ?>;
	overflow:hidden;
}

#launchtab a {
	background:<?php echo '#'; le('lefx_pages_tab_bg_color'); ?>;
	color:<?php echo '#'; le('lefx_pages_tab_color'); ?>;
	font-size:<?php echo ler('lefx_pages_tab_size') . 'em'; ?>;
	font-family:<?php legogl('lefx_pages_tab_font_goog', 'lefx_pages_tab_font'); ?>;
	text-align: center;
	padding:8px 40px;
	margin-right:40px;
	float:right;
	display:block;
	overflow:hidden;
	text-decoration:none;
	font-size:1.5em;
	text-transform: lowercase;
}

#launchlite {
	width:780px;
	margin:40px auto 0px auto;
}

#launchlitemodule {
	display:none;
}

#launchlitemodule #signup {
	background:<?php echo '#'; le('lefx_pages_tab_bg_color'); ?>;
	<?php echo $noShadow; ?>
	border:none;
	width: 700px;
	margin:0;
	position:static; /* fix for IE7 */
	border:none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
	box-shadow: none !important;
}

#launchlitemodule .signup-left {
	float:left;
	width:337px;
	margin-right:40px;
}

#launchlitemodule .signup-right {
	float:left;
	width:283px;
}

#launchlitemodule .social-container {
	width: auto;
	margin-bottom:0;
}

#launchlitemodule h2 {	
	color:<?php echo '#'; le('lefx_pages_tab_subheading_color'); ?>;
}

#launchlitemodule label {
	color:<?php echo '#'; le('lefx_pages_tab_label_color'); ?>;
}

#launchlitemodule a,
#launchlitemodule p a,
#launchlitemodule span.privacy-policy a {
	color:<?php echo '#'; le('lefx_pages_tab_link_color'); ?> !important;
}

#launchlitemodule p,
#launchlitemodule span.privacy-policy,
#launchlitemodule .radio-group label, 
#launchlitemodule .checkbox-group label {
	color:<?php echo '#'; le('lefx_pages_tab_bodytext_color'); ?>;
}

</style>