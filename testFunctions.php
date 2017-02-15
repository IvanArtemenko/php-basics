<?php

  $values = $_REQUEST['activities'];
  $str = '';
  foreach ($values as $i => $value) {
    switch($value){
      case 'sleeping':
        $case = "Сплю по выходным";
        break;
      default:
        $case = "";
    }

    if ((end($values) != $value)) $str .= $case .= ', ';
  }

  echo $str;