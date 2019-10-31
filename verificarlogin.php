<?php 
    // pegar os dados da tela

    $email= $_POST["email"];
    $senha= $_POST["senha"];

    echo"Email :".$email;
    echo"<br>Senha".$senha;


    // abrir conexao com o banco de dados" //
        // mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) //
    $con= mysqlI_connect("localhost", "root","","aulaprojeto");

    // montar a instrução de seleção para ir ao banco //

    $sql= "select * from usuario where email = '".$email."' and senha='".$senha."'";

    // executar a instrução //

    $rs = mysqli_query($con, $sql);
    if(mysqli_num_rows($rs)==1){
        //echo "Encontrei";
        echo"<script>";
        echo "location.href='ADM/painel.php'";
        echo "</script>";
    }else{
    //echo "nao encontrei";
    $msg="Usuário ou senha inválido";
    echo"<script>";
    echo"location.href='logar.php'";
    echo "</script>";
        
    }

?>