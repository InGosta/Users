<?php
$file = fopen ("../logs/log.txt","r+");
$filepath="../logs/log.txt";
 if ( $file )
  {
  	//Считываем логи

   $str_value = file_get_contents ($filepath);
   $array = unserialize($str_value);
	
	//Записываем логи
$array['Удалено']++;

   $str_value = serialize($array);
   fwrite($file, $str_value);

  }

  fclose ($file);