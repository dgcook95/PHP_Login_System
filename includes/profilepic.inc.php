<?php
session_start();
                $userName = $_SESSION['uid'];
                $userLoginId = $_SESSION['user'];

                $targetDir = "../images/uploads/";
                $userFile = $_FILES["fileToUpload"]["name"];

                $target = $targetDir . basename($userFile);

                $tempArray = explode($targetDir, $target);

                $fileName = explode('.', $tempArray[1]);
                $fileName[0] = $userName.'_profile_picture';
                $fileName[1] = strtolower($fileName[1]);

                $targetFileName = $fileName[0];
                $targetFileExtension = '.'.$fileName[1];
                $targetFile = $fileName[0].'.'.$fileName[1];
                $fullFilePath = $targetDir.$targetFile;

?>
