<?php include_once("functions.php");

	$root = "gallery";

	/* Write albums */

	if (is_dir($root)) {
		if ($dh = opendir($root)) {
			while (($album = readdir($dh)) !== false) {
				// Hide album if it starts with "_"
				if ( substr($album,0,1) != "_" ) {
					if ( is_dir($root . "/" . $album) && $album != "." && $album != ".." && $album != "cache" ) {
						$dir = $root . "/" . $album;
						writeAlbum( $dir, $album );
					}
				}
			}
		}
	}

?>
