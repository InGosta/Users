<?php
require_once 'connection.php'; 

$link = mysqli_connect($host, $user, '', $database) 
    or die("Ошибка " . mysqli_error($link));

mysqli_query($link,'SET NAMES utf8');
$query ="SELECT * FROM `user`";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

echo '<table class="table">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>Фамилия</th>';
  echo '<th>Имя</th>';
  echo '<th>Отчество</th>';
   echo '<th>Пароль</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
while ($row = mysqli_fetch_array($result,MYSQL_BOTH)) { 
   echo '<tr>';
    echo '<td>' . $row['Фамилия'] . '</td>';
    echo '<td>' . $row['Имя'] . '</td>';
    echo '<td>' . $row['Отчество'] . '</td>';
    echo '<td>' . $row['Пароль'] . '</td>';
    echo '<td>' ."<form method='POST' action='php/delete.php'> <input type='hidden' name='id' value='$row[4]' />";
    echo "<input type='submit' value='X' name='btn'/> </form>". '</td>';
    echo '</tr>';
    
    
  }
  echo '</tbody>';
  echo '</table>';

  mysqli_close($link);
