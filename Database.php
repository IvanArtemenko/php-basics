<?php

  class Database
  {
    public function __construct($host, $username, $password, $database)
    {
      $this->host = $host;
      $this->username = $username;
      $this->password = $password;
      $this->database = $database;
    }

    public function connect()
    {
      $connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

      if (!$connection) {
        echo "Error connecting to database", mysqli_connect_error();
        exit;
      } else {
        return $connection;
      }
    }

    public function insert($name, $surname, $gender, $age, $gender2, $birthday, $familystatus, $socialstatus, $address, $activities, $whatyoulike, $bookshaveread, $usercomment, $multiselect, $spam, $complexity)
    {
      return mysqli_query($this->connect(), "INSERT form (firstname, surname, gender, age, gender2, birthday, familystatus, socialstatus, address, activities, whatyoulike, bookshaveread, usercomment, multiselect, spam, complexity) VALUES 
        ('$name', '$surname', '$gender', '$age', '$gender2', '$birthday', '$familystatus', '$socialstatus', '$address', '$activities', '$whatyoulike', '$bookshaveread', '$usercomment', '$multiselect', '$spam', '$complexity')");
    }

    public function select()
    {
      $result = mysqli_query($this->connect(), "SELECT * FROM form");

      return $result;
    }
  }