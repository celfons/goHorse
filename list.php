<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha'])))
    {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);
      header('location:index.php');
      }
?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ocorrências</title>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta name="x-stylesheet-fallback-test" content="" class="sr-only" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Inserir nova ocorrências</a>
                <a class="navbar-brand" href="logout.php">Logout</a>
            </div>
            <div class="navbar-collapse collapse">
            </div>
        </div>
    </nav>
    <br />
    <div class="container body-content">
        <hr />
        <h4>Pesquisa = CRTL + F</h4>
           <table class="table">
               <tr>
                <td>ID</td>
                <?php if(isset($_SESSION['administrador'])){ echo"<td>Usuario</td>"; } ?>
                <td>Perda Comercial?</td>
                <td>Programa</td>
                <td>Horário</td>
                <td>Origem</td>
                <td>Falha</td>
                <td>Anexo</td>
               </tr>
               <?php
                    $con = new mysqli( 'localhost', 'root', '123', 'tv' );

                    $sql = "SELECT * FROM ocorrencias";

                    $result=mysqli_query($con,$sql);

                    if ($result->num_rows > 0) {
                    while($item = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$item["id"]."</td>";
                       if(isset($_SESSION['administrador'])){ echo "<td>".$item["usuario"]."</td>"; }
                        echo "<td>";
                        if($item["perdaComercial"] == 1){ echo "SIM"; } else { echo "NÃO"; } 
                        echo"</td>";
                        echo "<td>".$item["programa"]."</td>";
                        echo "<td>".$item["horario"]."</td>";
                        echo "<td>".$item["origem"]."</td>";
                        echo "<td>".$item["falha"]."</td>";
                        echo "<td><a href='anexos/".$item["anexo"]."'>".$item["anexo"]."</a></td>";
                        echo "</tr>";
                    }
                } 

               ?>
               </table>
            </table>
    </div>
</body>
</html>