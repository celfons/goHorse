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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    </script>
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
                <a class="navbar-brand" href="list.php">Lista de ocorrências</a>
                <a class="navbar-brand" href="logout.php">Logout</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </div>
    </nav>
    <div class="container body-content">
        
<br />
<br />

<hr />
<div class="row">
    <div class="col-xs-6 col-sm-4"></div>
    <div class="col-xs-6 col-sm-4">
            <form method="POST" action="save.php" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label" for="perdaComercial">Perda Comercial?</label>
                <input type="checkbox" id="perdaComercial" name="perdaComercial" />
            </div>
            <div class="form-group">
                <label class="control-label" for="programa">Programa</label>
                <select class="form-control" id="programa" name="programa" required>
                        <option value=""></option>
                        <option value="Mais voce">Mais voce</option>
                        <option value="Bem estar">Bem estar</option>
                        <option value="Praça tv">Praça tv</option>
                        <option value="Video show">Video show</option>
                        <option value="Outro">Outro</option>
                </select>
            </div>
             <div class="form-group">
                <label class="control-label" for="horario">Horário</label>
                <input class="form-control" type="time" step="1" id="horario" name="horario" required />
            </div>
             <div class="form-group">
                <label class="control-label" for="origem">Origem</label>
                <input class="form-control" type="text" id="origem" name="origem" placeholder="Qual é a origem da ocorrência?" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="falha">Falha</label>
                <textarea class="form-control" type="text" id="falha" name="falha" placeholder="Nos conte um pouco sobre a ocorrência..." /></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="anexo">Anexo</label>
                <input class="form-control" type="file" name="anexo" id="anexo" value"enctype='multipart/form-data'"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-default" />
            </div>
        </form>
    </div>
</div>
</body>
</html>