<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/admin/admin.php');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../view/user/user.php');
  }

 ?>
