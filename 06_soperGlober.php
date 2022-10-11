
<?php
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?
name=john&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
<div>
    <label for="name">NAME:</label>
    <input type="text" name="name">
</div>
<div>
    <label for="age">AGE:</label>
    <input type="text" name="age">

</div>
<input type="submit" value="submit" name="submit" >
</form>

