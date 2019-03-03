<?php
$file = fopen ("../logs/log.txt","r+");
$filepath="../logs/log.txt";

 if ( $file )
  {
  	//Считываем логи

   $str_value = file_get_contents ($filepath);
   $array = unserialize($str_value);



 
//If $contents is not a boolean FALSE value.

/*echo 'https://script.google.com/macros/s/AKfycbwlUPKuhpOsL5xA_8MSMj31sf8hWvynMh1dINxulegZjuFLqyYL/exec?p1=Добавлено%20'.$array['Добавлено'].'&p2=Удалено%20'.$array['Удалено'];
   if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbwlUPKuhpOsL5xA_8MSMj31sf8hWvynMh1dINxulegZjuFLqyYL/exec?p1=Добавлено%20'.$array['Добавлено'].'11&p2=Удалено%20'.$array['Удалено']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }*/
  
	
	//Записываем логи
/*$array['Добавлено'];

   $str_value = serialize($array);
   fwrite($file, $str_value);*/


  }

  fclose ($file);
