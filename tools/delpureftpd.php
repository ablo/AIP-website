<?php
// Script that will attempt to delete all
// .pureftpd-upload.* and .pureftpd-rename.* files
// 2010-12-31   Made by Piotr GRD    http://grd.net.pl/
// originally posted on   http://110mb.grd.net.pl/forum/index.php/topic,18.0.html
// Free to use and modify as long as you'll keep above info


$directory = '../';
$deletedfiles = 0;
$notdeletedfiles = 0;

function browse($dir) {
global $deletedfiles, $notdeletedfiles;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if (is_file($dir.'/'.$file) && preg_match("#\.pureftpd-(upload|rename)\..*#", $file)) {
                if (@unlink($dir.'/'.$file))
                {
                  $deletedfiles = $deletedfiles + 1;
                  echo $dir.'/<span style="color:blue;">'.$file.'</span> &nbsp; <span style="color:green;font-weight:bold;">DELETED</span><br/>'."\n";
                }
                else
                {
                  $notdeletedfiles = $notdeletedfiles + 1;
                  echo $dir.'/<span style="color:blue;">'.$file.'</span> &nbsp; <span style="color:red;font-weight:bold;">NOT DELETED</span><br/>'."\n";
                }
                flush();
            }
            else if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                browse($dir.'/'.$file);
            }
        }
        closedir($handle);
    }

}

browse($directory);

echo '<br/><br/>'.$deletedfiles.' file(s) DELETED';
if ($notdeletedfiles > 0)
{ echo ', <span style="color:red;">'.$notdeletedfiles.' file(s) NOT DELETED</span></br>
Try to check permmissions (CHMOD) for directories that contain undeleted files listed above.'; }

flush();

?>