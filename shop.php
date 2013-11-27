<?php include_once("functions.php");

	$root = "shop/items";

	/* Write shop items */

	if (is_dir($root)) {
		if ($dh = opendir($root)) {
			while (($file = readdir($dh)) !== false) {
				if ( $file != "." && $file != ".." && $file != "cache" ) {
					$imgthumb = 'gallery/timthumb.php?src=/w2/shop/items/' . $file . '&amp;w=200&amp;h=200&amp;zc=1&amp;q=100';
?>
<div>
	<img src="<?=$imgthumb?>" />
</div>

<?php 
				}
			}
		}
	}

?>
