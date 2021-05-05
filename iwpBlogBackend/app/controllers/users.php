<?php

  include(ROOT_PATH . "/app/database/db.php");
  if(isset($_POST['register-btn'])){
    unset($_POST['register-btn'], $_POST['passwordConf']);
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_id = create('user',$_POST);
    $user = selectOne('user', ['id' => $user_id]);
    dd($user);
  }
?>