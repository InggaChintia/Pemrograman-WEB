<?php
    //LANGKAH 3
    // if (isset($_POST["submit"])) {
    //     $targetDirectory="uploads/"; //Direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

    //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //         echo "File berhasil diunggah.";
    //     }else {
    //         echo "Gagal mengunggah file.";
    //     }
    // }

    //LANGKAH 5
    // if (isset($_POST["submit"])) {
    //     $targetDirectory="uploads/"; //Direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //     $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    //     $maxFileSize = 5 * 1024 * 1024;

    //     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //             echo "File berhasil diunggah.";

    //             // Membuat thumbnail
    //             list($width, $height) = getimagesize($targetFile);
    //             $newWidth = 200;
    //             $newHeight = ($height / $width) * $newWidth;

    //             $thumb = imagecreatetruecolor($newWidth, $newHeight);

    //             if ($fileType == "jpg" || $fileType == "jpeg") {
    //                 $source = imagecreatefromjpeg($targetFile);
    //             } else if ($fileType == "png") {
    //                 $source = imagecreatefrompng($targetFile);
    //             } else if ($fileType == "gif") {
    //                 $source = imagecreatefromgif($targetFile);
    //             }

    //             imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    //             // Menyimpan thumbnail ke direktori
    //             $thumbFile = $targetDirectory . "thumb_" . basename($_FILES["fileToUpload"]["name"]);
    //             if ($fileType == "jpg" || $fileType == "jpeg") {
    //                 imagejpeg($thumb, $thumbFile);
    //             } else if ($fileType == "png") {
    //                 imagepng($thumb, $thumbFile);
    //             } else if ($fileType == "gif") {
    //                 imagegif($thumb, $thumbFile);
    //             }

    //             imagedestroy($thumb);
    //             imagedestroy($source);

    //         }else {
    //             echo "Gagal mengunggah file.";
    //         }
    //     }else {
    //         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    //     }
    // }

    //LANGKAH 8
    if (isset($_POST["submit"])) {
        $targetDirectory="documents/"; //Direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxFileSize = 10 * 1024 * 1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
            }else {
                echo "Gagal mengunggah dokumen.";
            }
        }else {
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>