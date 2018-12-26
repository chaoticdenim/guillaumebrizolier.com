<?php

    session_start();

    if($_SESSION['email'])
    {
        echo "<h2> {$_SESSION['email']} </h2>";
    }
    else
    {
        echo "<h2> ta mere </h2>";
    }

?>