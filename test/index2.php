<?php
$conn = mysqli_connect('localhost', 'root', '123456', 'testing');
if(!$conn){
    die('could not connect to database');
}

if(isset($_POST['submit'])){
    $file = $_FILES['file']['tmp_name'];
    
    $handle = fopen($file, "r");
    
    while(($fileop = fgetcsv($handle, 1000, ";")) !== false){
        $first_name = $fileop[0];
        $last_name = $fileop[1];
        $email = $fileop[2];
        
        $sql = mysqli_query($conn,"INSERT INTO csv (first_name, last_name, email) VALUES ('$first_name','$last_name','$email')");
        
        
    }
    
    if($sql){
        echo 'data uploaded successfully';
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Mysql Database through Upload CSV File using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
    <div class="container">
        <form action="index2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>