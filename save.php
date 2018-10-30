<?php
    session_start();

    if (isset($_POST)) {

        $conexao = new mysqli( 'localhost', 'root', '123', 'tv' );

        if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

        $diretorio = "anexos/";
       
        echo $usuario = $_SESSION['usuario'];
        $perdaComercial = $_POST["perdaComercial"];
        $programa = $_POST["programa"];
        $horario = $_POST["horario"];
        $origem = $_POST["origem"];
        $falha = $_POST["falha"];
        $anexo = basename($_FILES["anexo"]["name"]);

        if($perdaComercial=="on"){
            $perdaComercial = 1;
        }
        else{
            $perdaComercial = 0;
        }

        mysqli_query($conexao,"INSERT INTO ocorrencias (usuario,perdaComercial,programa,horario,origem,falha,anexo) VALUES ('".$usuario."','".$perdaComercial."','".$programa."','".$horario."','".$origem."','".$falha."','".$anexo."')") or die ($conexao->error);

        mysqli_close($conexao);

        if( $anexo != '' ){
            $arquivo = $diretorio . basename($_FILES['anexo']['name']);
            move_uploaded_file($_FILES['anexo']['tmp_name'], $arquivo);
        }

            
       header('location:list.php');
    }


?>