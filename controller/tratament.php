<?php
session_start();

require_once("../autoload.php");
    
if (!isset($_SESSION['logged_in'])) {
    header('Location: ../index.php?error_message=true');
}
