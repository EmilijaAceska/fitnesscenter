<?php
session_start();
session_destroy();//za unistuvanje na sesijata
header("Location:../index.html");exit();
?>