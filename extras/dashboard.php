<?php

session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
echo '<a href="logout.php">loguot</a>';
}else {
    echo '<h1> Welcome Ghoste </h1>';
    echo '<a href="/php-crash/13_session.php"';

}