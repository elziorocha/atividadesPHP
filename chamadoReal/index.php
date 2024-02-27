<?php


?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a href="#" class="navbar-brand">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top">
        Chamado Real
    </a>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="valida_login.php" method="post">
                            <div class="form-group">
                                <h4>Insira seu e-mail</h4>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                            <h4>Insira sua senha</h4>
                                <input type="password" name="senha" class="form-control" placeholder="senha">
                            </div>
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                            <?php } ?>
                            <button class="btn btn-lg btn-info btn-block" type="submit">
                                Entrar
                            </button>
                            <div class="text-danger pt-2">
                                    Usuário ou senha inválidos!
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>