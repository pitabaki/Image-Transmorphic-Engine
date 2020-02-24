<?php
    
    //print path for images
    $destination_path = __DIR__ . '/images/webp/';

    //source path for images
    $images = new FilesystemIterator(__DIR__ . '/images/original/');

    //File iterator!!
    foreach ( $images as $fileinfo ) {
        $file_name = $fileinfo->getFilename(); //get full name with extension
        $file_name_wo_ext = pathinfo($file_name, PATHINFO_FILENAME); //get full name without extension
        $print_path = $destination_path . $file_name_wo_ext;
        if ( $file_name != '.DS_Store' ) {
            //echo $fileinfo . "\n";
            convert_webp($fileinfo, $print_path);
        }
    }

    // Compress image
    function convert_webp ( $source, $destination ) {

        $info = getimagesize($source);

        if ( exif_imagetype($source) == IMAGETYPE_JPEG ) {
            //echo "IMAGETYPE_JPEG";
            $image = imagecreatefromjpeg($source);
        } elseif ( exif_imagetype($source) == IMAGETYPE_GIF ) {
            //echo "IMAGETYPE_GIF";
            $image = imagecreatefromgif($source);
        } elseif ( exif_imagetype($source) == IMAGETYPE_PNG  ) {
            //echo "IMAGETYPE_PNG";
            $image = imagecreatefrompng($source);
        }

        imagepalettetotruecolor($image);

        imagewebp($image, $destination . ".webp", 100);

    }

?>