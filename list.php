<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>

<h1>Your data</h1>
<table border="2">
  <thead>
  <tr>
    <th>id</th>
    <th>first name</th>
    <th>surname</th>
    <th>gender</th>
    <th>age</th>
    <th>gender2</th>
    <th>birthday</th>
    <th>family status</th>
    <th>social status</th>
    <th>address</th>
    <th>activities</th>
    <th>what you like</th>
    <th>books have read</th>
    <th>user comment</th>
    <th>multiselect</th>
    <th>spam</th>
    <th>complexity</th>
  </tr>
  </thead>
  <tbody>

  <?php
    require_once 'Database.php';

    $list = new Database("localhost", "root", "", "geekhub");

    $result = $list->select();
    if ($result)
    {

      while($row = mysqli_fetch_assoc($result))
      {
  ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['firstname'] ?></td>
          <td><?= $row['surname'] ?></td>
          <td><?= $row['gender'] ?></td>
          <td><?= $row['age'] ?></td>
          <td><?= $row['gender2']?></td>
          <td><?= $row['birthday'] ?></td>
          <td><?= $row['familystatus'] ?></td>
          <td><?= $row['socialstatus'] ?></td>
          <td><?= $row['address'] ?></td>
          <td><?= $row['activities'] ?></td>
          <td><?= $row['whatyoulike'] ?></td>
          <td><?= $row['bookshaveread'] ?></td>
          <td><?= $row['usercomment'] ?></td>
          <td><?= $row['multiselect'] ?></td>
          <td><?= $row['spam'] ?></td>
          <td><?= $row['complexity'] ?></td>
        </tr>
  <?php
    }
  }
  ?>
  </tbody>
</table>

</body>
</html>