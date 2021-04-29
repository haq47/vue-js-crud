<?php 

  $conn = new mysqli('localhost','root','','haq');
  $data = $conn -> query("SELECT * FROM users ORDER By id DESC");


  $all_users = [];


  while( $user =  $data -> fetch_assoc() ) {
    array_push($all_users, $user);
  }

  echo json_encode($all_users);

  