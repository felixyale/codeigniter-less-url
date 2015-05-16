<?php
require "lessc.inc.php";

header('Content-Type: text/css');

$filename = "assets/" . ltrim($path);

if (file_exists($filename)) {	
	// $last_modified_time = filemtime($filename);
	// $etag = md5_file($filename);
	//
	// header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT");
	// header("Etag: $etag");
	//
	// if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && !empty($_SERVER['HTTP_IF_NONE_MATCH'])) {
	// 	if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time ||
	// 	    trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {
	// 	    header("HTTP/1.1 304 Not Modified");
	// 	    exit;
	// 	}
	// }

	echo "/**\n  " . $path . "\n*/\n\n";

	$less = new lessc;

	$less->setPreserveComments(true);

	echo $less->compileFile($filename);
} else {

	echo "/**\n  file \"" . $filename . "\" not exists \n*/";

}
