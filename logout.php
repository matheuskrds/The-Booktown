<?php

  require_once("templates/header7.php");

  if($userController) {
    $userController->destroyToken();
  }