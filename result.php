<?php
require_once('config.php');
session_start();
?>
<?php
foreach($_POST as $key => $value){
    $question = str_split($key);
  echo $question[1] . " : " . $value . "<br />\r\n";
}
?>