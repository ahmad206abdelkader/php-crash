<?php
if(isset($_POST['submit'])){
    $allowed_ext = array('png' , 'jpg' ,'jpeg', 'Gif');
    if(!empty($_FILES['upload']['name'])){
print_r($_FILES);
$file_name = $_FILES['upload']['name'];
$file_size = $_FILES['upload']['size'];
$file_emp = $_FILES['upload']['tmp_name'];
$target_dir = "uploads/${file_name}";

$file_ext = explode('.' , $file_name);
$file_ext = strtolower(end($file_ext));


if(in_array($file_ext, $allowed_ext)){
if($file_size <= 1000000){
    move_uploaded_file($file_tmp , $target_dir);
    $message = '<p style="color: green"> File Uploading</p>'; 

}else {
    $message = '<p style="color: red;"> Invaled file type </p>'; 
}
}else{
    $message = '<p style="color: red;"> Invaled file type </p>';
}

    }else {
        $message = '<p style="color: red;">please chose a file</p>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $message ?? null ; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >

    select image to upload:
<input type="file" name="upload">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>