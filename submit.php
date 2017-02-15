<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request has been sent successfully</title>
</head>
<body>

<h1>Request has been sent successfully: go check <a href="list.php">List</a></h1>
<?php

  require_once 'Database.php';

  $form = new Database("localhost", "root", "", "geekhub");
  $form->connect();
  if (isset($_REQUEST["submit"]))
  {

    $name = $_REQUEST["firstname"];
    $surname = $_REQUEST["secondname"];
    $gender1Value = $_REQUEST["gender"];
    $age = $_REQUEST["age"];
    $gender2Value = $_REQUEST["gender2"];

    $gender1 = ($gender1Value == "m") ? "Male" : "Female";
    $gender2 = ($gender2Value == "m") ? "Guy" : "Girl";
    $birthday = $_REQUEST["birthday"];
    $familyStatus = $_REQUEST["status"];
    $socialStatus = $_REQUEST["status-soc"];
    $address = $_REQUEST["address"];
    $activity = implode(", ", $_REQUEST["activities"]);
    $whatYouLike = $_REQUEST["whatyoulike"];
    $booksHaveRead = $_REQUEST["books"];
    $userComment = $_REQUEST["comment"];
    $multiSelect = $_REQUEST["multiselect"];
    $spam = implode(", ", $_REQUEST["spam"]);
    $complexity = $_REQUEST["complexity"];

    $form->insert($name, $surname, $gender1, $age, $gender2, $birthday, $familyStatus, $socialStatus, $address, $activity, $whatYouLike, $booksHaveRead, $userComment, $multiSelect, $spam, $complexity);

  }