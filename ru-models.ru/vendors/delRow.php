<?php

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

if (true) {
    require_once 'connect.php';
    $path = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `Photos` FROM `models` WHERE `ID` = '$id'"))['Photos'];
    mysqli_query($connect, "DELETE FROM `models` WHERE `ID` = '$id'");

    $folderPath = '../uploads/'.$path;
    if (file_exists($folderPath)) {
        removeDir($folderPath);
    }
}

function removeDir($path) {
    if (is_file($path)) {
        unlink($path);
    } else {
        $files = glob($path . '/*');
        foreach ($files as $file) {
            removeDir($file);
        }
        rmdir($path);
    }
}