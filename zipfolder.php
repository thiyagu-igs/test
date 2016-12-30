<?php $zip = new ZipArchive();
$ZipFileName = "newZipFile.zip";

if ($zip->open($ZipFileName, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) !== true)
{
    echo "Cannot Open for writing";
}


//$zip->addEmptyDir('newFolder');
$zip->addFromString('test.txt', 'file content goes here');
$handle = opendir(dirname(realpath(__FILE__)).'/images/');$i=1;
        while($file = readdir($handle)){
		if($i>6)continue;
            if($file !== '.' && $file !== '..'){
				$imgstr = file_get_contents('images/'.$file);
				if($imgstr!==false){
				imagegif(imagecreatefromstring($imgstr), $i."output.gif");
                 $zip->addFile('images/'.$file, $i."output.png");
				}
    		}
			
			$i++;
        }
$zip->close();?>