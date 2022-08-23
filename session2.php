<?php
session_start();
if($_SESSION['sess_username'] <> ""){
echo $_SESSION['sess_username'];
}else{
echo "ไม่มีค่า Session";
}
?>