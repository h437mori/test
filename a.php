#!/usr/bin/php
<?php 
$search = "abc";

  foreach(file('/usr/share/dict/linux.words') as $line){
   if( strpos($line, $search) !== false){
     echo "$line";
   }
  } 
?>

 /* if文の条件にstrpos関数を使い、値がfalseでなければlineを表示するようにした
    !=では0をfalseとしてしまうため!==とした */