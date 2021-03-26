<?php
session_start();
session_unset();
echo $_session["name"];
?>