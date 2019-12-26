<?php
   // Initialized Value
    $nick_name = '';
    $gender = '';
    $education = '';
    $hobby1 = '';
    $hobby2 = '';
    $hobby3 = '';
    $comment = '';

  // Accept Request
    $nick_name = $_REQUEST['nick_name'];
    $gender    = $_REQUEST['gender'];
    $education = $_REQUEST['education'];

    if(isset($_REQUEST['hobby1']))
      $hobby1  = $_REQUEST['hobby1'];
    if(isset($_REQUEST['hobby2']))
      $hobby2  = $_REQUEST['hobby2'];
    if(isset($_REQUEST['hobby3']))
      $hobby3  = $_REQUEST['hobby3'];

    $comment   = $_REQUEST['comment'];

  // Show Result
    echo $nick_name;
    echo $gender;
    echo $education;
    echo $hobby1;
    echo $hobby2;
    echo $hobby3;
    echo $comment;

?>