<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ocorrências</title>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta name="x-stylesheet-fallback-test" content="" class="sr-only" />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    </script>
    <link rel="stylesheet" href="/css/site.min.css?v=kHvJwvVAK1eJLN4w8xygUR3nbvlLmRwi5yr-OuAO90E" />
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
                <a class="navbar-brand" href="/">Login</a>
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
        <form method="POST" action="login.php">
             <div class="form-group">
                <label class="control-label" for="usuario">Usuario</label>
                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="jose.maria" required />
            </div>
            <div class="form-group">
                <label class="control-label" for="senha">Senha</label>
                <input class="form-control" type="password" id="senha" name="senha" placeholder="******" required />
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-default" />
            </div>
        </form>
    </div>
</div>
</body>
</html>