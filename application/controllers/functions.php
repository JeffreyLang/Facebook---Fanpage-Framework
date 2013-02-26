<?php 
function baseurl(){
	$baseurl1 = 'http://1socialmedia.nl/facebook-cms/sites/framework/';
	return $baseurl1;
}

function ThemeUrl(){
	$theme = '1socialmedia';
	$turl = baseurl().'themes/'.$theme.'/';
	return $turl;
}


function loadJS(){
	$tlink = Themeurl();
	$js = '';
	return $js;
}

function Headers(){	
	 require 'application/libraries/facebook/facebook.php';
	 $app_id = '12321';
	 $local_lang = 'en_GB';
	 $tlink = Themeurl();
	 $header =  '<!DOCTYPE html>';
	 $header .= '<html lang="en">';
	 $header .= '<head>';
	 $header .= '<link rel="stylesheet" type="text/css" href="'.$tlink.'css/style.css">';
	 $header .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
	 loadJS();
	 $header .= '</head>';
	 $header .= '<body>';
	 $header .= '<div id="fb-root"></div>';
     $header .= '<script>';
	 $header .= "window.fbAsyncInit = function() {FB.init({appId: ".$app_id.", status: true, cookie: true, xfbml: true});FB.Canvas.setAutoGrow();";
	 $header .= "};(function() {var e = document.createElement('script'); e.type = 'text/javascript'; e.src = document.location.protocol + '//connect.facebook.net/".$local_lang."/all.js'; e.async = true;";
	 $header .= "document.getElementById('fb-root').appendChild(e);";
	 $header .= "}());";
	 $header .= "</script>";
	 $header .= '<div class="main_wrapper">';
	 echo $header;	 
}

function Footer(){
	$footer  = '</div>'; 
	$footer .= '</body>';
	$footer .= '</html>';
	echo $footer;
}




?>