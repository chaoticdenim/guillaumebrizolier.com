<?php

    session_start();

    if($_SESSION['email'])
    {
        echo "<h2> {$_SESSION['email']} </h2>";
    }

?>