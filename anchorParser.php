<?php
  header('Content-type: text/html; charset=utf-8');
  require_once('simple_html_dom.php');
  $html = file_get_html('https://alef.im/');
  $summ = 0;
  $result = "<h3>Найденные ссылки:</h3>";
  foreach($html->find('a') as $a){
    if(mb_strripos($a, 'з')){
      $link = mb_strtolower($a);
      $result .= "$a";
      $summ += substr_count($link, 'з');
    }
  }
  $result .= "<hr><strong>Найдено букв 'з' в анкорах: $summ</strong>";
  echo $result;
?>
