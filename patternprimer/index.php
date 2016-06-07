<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pattern Primer</title>
<link rel="stylesheet" href="../css/style.css">
<style>

html {
	border-top: 0.5em solid #693;
	background-color: #eee;
}
body {
	background-color: #fefefe;
	background: rgba(255,255,255,0.9);
	margin: 0 2.5%;
	padding: 0 2.5%;
	font-size: 100%;
	line-height: 1.875;
	font-family: Cambria, Georgia, serif;
	color: #333;
	border-left: 1px solid;
	border-right: 1px solid;
	border-color: #ddd;
	border-color: rgba(0,0,0,0.13);
}

 textarea.code {
	background-color: #FFF;
	width: 100%;
	font-family: inherit;
	font-size: inherit;
	padding: 0.125em;
	border: 1px solid #CCC;
	border-radius: 0.25em;
	color:#333;
}


.pattern {
    clear: both;
    overflow: hidden;
}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="../js/modernizr.custom.67211.js"></script>

<script type="text/javascript" src="../fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="../fancybox/helpers/jquery.fancybox-media.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" media="screen" />
<script src="../js/custom.js" type="text/javascript"></script> 

</head>

<body>

<?php
$files = array();
$handle=opendir('patterns');
while (false !== ($file = readdir($handle))):
    if(substr($file, -5) == '.html'):
        $files[] = $file;
    endif;
endwhile;
sort($files);
foreach ($files as $file):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('patterns/'.$file);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30" class="code">';
    echo htmlspecialchars(file_get_contents('patterns/'.$file));
    echo '</textarea>';
    echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>

</body>
</html>
