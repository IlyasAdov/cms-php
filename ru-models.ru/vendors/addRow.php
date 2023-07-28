<?php
session_start();
$Name = $_POST['name'];
$Height = $_POST['height'];
$Dimensions = $_POST['dimensions'];
$Hair = $_POST['hair'];
$Eyes = $_POST['eyes'];
$Shoes = $_POST['shoes'];
$Dress = $_POST['dress'];
$Avatar = $_FILES['avatar'];
$Photos = $_FILES['photos'];

if (isset($Name)) {
    require_once 'connect.php';

    $PhotosFolder = 'model'.(mysqli_fetch_assoc(mysqli_query($connect, "SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'models'"))['AUTO_INCREMENT'] + 1);

    $request = mysqli_query($connect, "INSERT INTO `models`(`Name`, `Height`, `Dimensions`, `Hair`, `Eyes`, `Shoes`, `Dress`, `Avatar`, `Photos`) VALUES ('$Name','$Height','$Dimensions','$Hair','$Eyes','$Shoes','$Dress','{$Avatar['name']}','$PhotosFolder')");

    if ($request) {
        $folderPath = '../uploads/' . $PhotosFolder;

        if (!is_dir($folderPath)) {
            if (mkdir($folderPath, 0777, true)) {
                if ($Avatar['error'] === UPLOAD_ERR_OK) {
                    $fileName = $Avatar['name'];
                    $tmpFilePath = $Avatar['tmp_name'];
                
                    move_uploaded_file($tmpFilePath, $folderPath.'/'.$fileName);
                    $_SESSION['message'] = 'Анкета успешно создана!';
                } else {
                    $_SESSION['message'] = 'Ошибка при загрузке файла: ' . $_FILES['file']['error'].'!';
                }

                if (mkdir($folderPath.'/photos', 0777, true)) {
                    if (!empty($Photos['name'][0])) {
                        $fileCount = count($Photos['name']);
                    
                        for ($i = 0; $i < $fileCount; $i++) {
                            $fileName = $Photos['name'][$i];
                            $tmpFilePath = $Photos['tmp_name'][$i];
                    
                            move_uploaded_file($tmpFilePath, $folderPath.'/photos/'.$fileName);
                        }

                        $_SESSION['message'] = 'Анкета успешно создана!';
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    } else {
                        $_SESSION['message'] = 'Файлы не были отправлены!';
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                    $_SESSION['message'] = 'Анкета успешно создана!';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else {
                    $_SESSION['message'] = 'Ошибка при создании папки!';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
                $_SESSION['message'] = 'Анкета успешно создана!';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                $_SESSION['message'] = 'Ошибка при создании папки!';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            $_SESSION['message'] = 'Анкета успешно создана!';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['message'] = 'Папка уже существует!';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $_SESSION['message'] = 'Ошибка при создании анкеты!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}