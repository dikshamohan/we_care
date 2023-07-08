<?php

session_start();

session_unset();

session_destroy();

header("Location: index.php");  //changed home to index