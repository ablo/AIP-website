<?php

	function makeHTMLStr($str) {

		$newStr = str_replace("xaringx", "&aring;", $str);
		$newStr = str_replace("xaumlx", "&auml;", $newStr);
		$newStr = str_replace("xoumlx", "&ouml;", $newStr);

		$newStr = str_replace("xAringx", "&Aring;", $newStr);
		$newStr = str_replace("xAumlx", "&Auml;", $newStr);
		$newStr = str_replace("xOumlx", "&Ouml;", $newStr);

		$newStr = str_replace("xnbspx", "&nbsp;", $newStr);

		$newStr = str_replace("xampx", "&amp;", $newStr);
		
		return( $newStr );
	}

	function output_iptc_data( $image_path, $field ) {
		$size = getimagesize ( $image_path, $info);
		if(is_array($info)) {
			$iptc = iptcparse($info["APP13"]);
			foreach (array_keys($iptc) as $s) {
				$c = count ($iptc[$s]);
				for ($i=0; $i <$c; $i++) {
					if ( $s == $field ) {
						return($iptc[$s][$i]);
					}
				}
			}
		}
	}

	function writeAlbum($albumdir,$dirname) {

		// Open a known directory, and proceed to read its contents
		if (is_dir($albumdir)) {
			$sortFiles = array();
			if ($dh = opendir($albumdir)) {
				while (($file = readdir($dh)) !== false) {
					$sortFiles[] = $file;
				}
				closedir($dh);
			}
			sort($sortFiles);
			$index = 0;
			foreach($sortFiles as $file) {
					$filepath = $albumdir . "/" . $file;
					if ( filetype($filepath) == "file" && substr($file, 0, 1) != '.' ) {
// 						$imglarge = 'timthumb.php?src=' . urlencode($filepath) . '&amp;h=1200&amp;zc=1&amp;q=100';
						$imglarge = $filepath; // DO I NEED timthumb HERE?
						// Get IPTC description...
						$head_iptc = output_iptc_data($filepath,"2#105");
						$desc_iptc = output_iptc_data($filepath,"2#120");
						$title = $head_iptc . ($desc_iptc ? '<small>&nbsp;&nbsp;<!--<i class=\'fa fa-picture fa-lg\'></i>-->-&nbsp;&nbsp;' . $desc_iptc . '</small>' : '');

						$albumClass = ($index == 0 ? "album" : "hidden");
// 						$imgthumb = 'timthumb.php?src=' . $filepath . '&amp;w=277&amp;h=205&amp;zc=1&amp;q=100';
						$imgthumb = 'gt/' . $dirname . '/' . $file;

						$shopAlbumClass = "";

						if ( file_exists($albumdir . "/.shop") ) {
							// If .shop exists we handle this as a shop album
							$shopAlbumClass = " shop";

						}

						$maskIcon = "fa fa-camera"; // Default
						if ( file_exists($albumdir . "/.travel") ) {
							$maskIcon = "fa fa-plane";
						} else if ( file_exists($albumdir . "/.wedding") ) {
							$maskIcon = "fa fa-heart";
						} else if ( file_exists($albumdir . "/.portrait") ) {
							$maskIcon = "fa fa-user";
						} else if ( file_exists($albumdir . "/.assignment") ) {
							$maskIcon = "fa fa-building-o";
						} else if ( file_exists($albumdir . "/.archive") ) {
							$maskIcon = "fa fa-picture-o";
						} else if ( file_exists($albumdir . "/.panorama") ) {
							$maskIcon = "fa fa-arrows-h";
						}

						echo '
						<a class="' . $albumClass . $shopAlbumClass . ' gallery_image" href="' . $imglarge . '" rel="' . $dirname . '" caption="' . $title . '" image="' . $filepath . '" data-artnr="' . substr($file,4,-4) . '">
							<img src="' . $imgthumb . '" alt="" width="277" height="205" />
							<div class="mask"><i class="' . $maskIcon . '"></i>' . makeHTMLStr( substr($dirname,2) ) . '<small>' . $head_iptc . '</small></div>
						</a>
					';
						$index++;
					}
			}
		}
	}

	function writeSlide($albumdir,$dirname,$maxfiles) {

		// Open a known directory, and proceed to read its contents
		if (is_dir($albumdir)) {
			$sortFiles = array();
			if ($dh = opendir($albumdir)) {
				while (($file = readdir($dh)) !== false) {
					$sortFiles[] = $file;
				}
				closedir($dh);
			}
			sort($sortFiles);
			$index = 0;

			foreach($sortFiles as $file) {
					$filepath = $albumdir . "/" . $file;
					if ( filetype($filepath) == "file" && $file != "." && $file != ".." ) {
// 						$imglarge = 'timthumb.php?src=' . urlencode($filepath) . '&amp;zc=1&amp;q=100';
// 						$imgslide = 'timthumb.php?src=' . urlencode($filepath) . '&amp;w=980&amp;h=525&amp;zc=1&amp;q=100&amp;a=c';
// 						$imgslide = '/s/' . $file;
						// Get IPTC description...
						$head_iptc = output_iptc_data($filepath,"2#105");
						$desc_iptc = output_iptc_data($filepath,"2#120");
// 						if ( $head_iptc ) {
// 							echo'<p class="caption">' . $head_iptc . '<small>' . $desc_iptc . '</small></p>';
// 						}

// 						echo '<img src="' . $imgslide . '" alt="" />';
						echo '<img src="gallery/_SLIDE/' . $file . '" width="980" height="525" alt="" />';
						$index++;
						if ( $index == $maxfiles ) {
							break;
						}
					}
			}
		}
	}

	function getRandomImageFromFolder($dir) {

		if ( file_exists($dir) ) {

			$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		
			$randomImage = $images[array_rand($images)]; // See comments
			return($randomImage);
		}
		return "";
	}

?>
