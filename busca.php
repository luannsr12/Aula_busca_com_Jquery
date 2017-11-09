<?php
$conn  = mysqli_connect('localhost','root','','busca');

$busca =  $_POST['busca'];


$query = mysqli_query($conn, "SELECT * FROM clientes WHERE nome LIKE '%$busca%'");
$num   = mysqli_num_rows($query);
if($num >0){
    while($row = mysqli_fetch_assoc($query)){
      echo $row['nome'].' - '.$row['email'].'<br /><hr>';
    }
}else{
  echo "Esta Pessoa Não Existe!";
}
?>
