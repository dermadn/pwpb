<?php
$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
$fileName = $_FILES['uploadedFile']['name'];
$fileSize = $_FILES['uploadedFile']['size'];
$fileType = $_FILES['uploadedFile']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));

$newFileName = md5(time(). $fileName) . '.' . $fileExtension;

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {

    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'rar');
    
    if (in_array($fileExtension, $allowedfileExtensions)) {
        $uploadFileDir = './upload_file';
        $dest_path = $uploadFileDir . $newFileName;

        $terUpload = move_uploaded_file($fileTmpPath, $dest_path);
        echo "Upload Berhasil! <br>";
        echo "Menuju File : <a href='".$uploadFileDir.$newFileName."'>".$newFileName."</a>";
    }
    else {
        echo "Upload Gagal!";
    }
}
?>