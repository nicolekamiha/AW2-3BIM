<?php

require_once 'usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

  
  <form method='post'>
   <input type="email" placeholder =" Usuario" name="email"> <br>
   <input type="password" placeholder =" Senha"name= "senha"><br>
  <input type="submit" name = "Entrar">
<a href = "cadastrar.php" > Cadastro<strong>
</form>
<?php

if(isset($_POST['email'])){


    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
   

    if( !empty($email) && !empty($senha)){

    
        if($u->logar($email,$senha)){

            $u->conectar("projeto_loginn", "localhost", "root", "");

header("location: AreaPrivada.php");


}

else{

    echo"erro";
}
            
        }

        else{

            echo"erro";
        }
    }

    else{

        echo"preencha";
    }



?>
   

    </body>
</html>
