<?php
session_start();
//$server = "localhost";
$server = "187.45.196.218";
$mysqli = new mysqli("187.45.196.218","basesgrandejog","ondeumvai@99T","basesgrandejog");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$respPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//testes
//echo '<br>';
//print_r($respPost);
?>
<!--
  while ($base = $result->fetch_object()) {
      function retornaNome($id ,$tabela){
      $sql = "SELECT nome FROM $tabela WHERE id = '$id'";
      $rnome = $GLOBALS['mysqli']->query($sql);
      $rn = $rnome->fetch_object();
      echo $rn->nome;
  }
-->