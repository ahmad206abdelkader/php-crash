<?php

session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = filter_input( INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
    // $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password =$_POST['password'];

    if($username == 'john' && $password == 'password'){
        $_SESSION['username']= $username;
        header('Loaction: /php-crash/extras/dashboard.php');
    }else{
        echo 'Incorrect Login';
        // header('Loaction: /php-crash/extras/dashboard.php');
    }
    
    // echo $username;
}

    ?>
    
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method='POST'>
<div>
    <label for="username">username</label>
    <input type="text" name="username">
</div>
<div>
    <label for="password">password:</label>
    <input type="text" name="password">

</div>
<input type="submit" value="submit" name="submit" >
</form>