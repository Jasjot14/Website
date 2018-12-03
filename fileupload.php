<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = array("xlsx" => "file/xlsx", "pdf" => "file/pdf");
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 100 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
		$newname = 'C:\xampp\htdocs\ebusiness\upload\\'.$filename;
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $newname)){
                echo $_FILES["file"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload" . $newname);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["file"]["error"];
    }
}

if($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else{
    echo "File Name: " . $_FILES["file"]["name"] . "<br>";
    echo "File Type: " . $_FILES["file"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
	
	
	
}
?>

