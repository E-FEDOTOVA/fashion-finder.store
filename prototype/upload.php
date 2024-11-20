<?php
$displayName = $_SESSION["displayName"]; //check for displayName

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if ($_FILES["fileToUploadNep"]["error"] > 0) { // Check for any errors during file upload
        switch ($_FILES["fileToUploadNep"]["error"]) {
            case UPLOAD_ERR_INI_SIZE:
                echo "Error: The uploaded file exceeds the upload_max_filesize directive in php.ini.";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                echo "Error: The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "Error: The uploaded file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "Error: No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "Error: Missing a temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Error: Failed to write file to disk.";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "Error: A PHP extension stopped the file upload.";
                break;
            default:
                echo "Error: An unknown error occurred during the file upload.";
                break;
        }
    } else {
        // file upload was successful
        $uploadDir = "profilePicture/";

        // make directory for the user's profile pictures if it doesn't exist
        $userDir = $uploadDir . $displayName . "/";
        if (!file_exists($userDir)) {
            mkdir($userDir, 0777, true); // recursive directory creation
        }

        $fileName = basename($_FILES["fileToUploadNep"]["name"]);
        $targetFilePath = $userDir . $fileName;
		
        if (move_uploaded_file($_FILES["fileToUploadNep"]["tmp_name"], $targetFilePath)) {
            echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    header("Location: index.html");
    exit();
}
?>
