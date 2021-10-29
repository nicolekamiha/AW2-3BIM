<?php

require_once 'usuarios.php';
$u = new Usuario;
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>

  
    <form method='post'>
    <input type="text" placeholder =" Nome" name="nome"maxlenght = "30"> <br>
    <input type="text" placeholder =" Telefone" name="telefone"maxlenght = "30"> <br>
   <input type="email" placeholder =" Usuario" name="email"maxlenght = "40"> <br>
   <input type="password" placeholder =" Senha"name= "senha"maxlenght = "15"><br>
   <input type="password" placeholder =" Confirmar Senha"name= "confirmarsenha"maxlenght = "15"><br>
  <input type="submit" name = "Cadastrar">
</form>
<?php
 if(isset($_POST['nome'])){

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarsenha = addslashes($_POST['confirmarsenha']);

    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)){

$u->conectar("projeto_loginn", "localhost", "root", "");
    if($senha == $confirmarsenha){
    if($u->cadastrar($nome, $telefone, $email, $senha))
    {
 echo"cadastrado";


    }
    else{

        echo"ja cadastrado";
    }
    }
    else{

        echo "sem correspondencia";
    }


  }
else{

    echo "Preencha";
}
}
    
?>


    </body>
</html>
