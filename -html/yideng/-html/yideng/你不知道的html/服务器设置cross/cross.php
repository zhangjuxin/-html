<?php
  header('Access-Control-Allow-Origin:*');
  header('Acess-Control-Allow-Methods','GET,POST,PUT,DELETE');
  $a = !empty($_REQUEST['a'])?trim($_REQUEST['a']):'';
  if ($a == 'getUserInfo') {
     echo json_encode(array(
       'uid' => 1,
       'name' => '测试',
     ));
  }else {
    echo '';
  }
 ?>
