<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Alternabok!</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1" async>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet" async>
        <link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous" async>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet" async>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" async>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous" async></script>
    </head>
    
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand "><img class="logo" src="/images/logo.png" alt=""></a>
                <form class="d-flex" action="/search" method="POST">
                    <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-primary" type="submit"><i class="fab fa-searchengin"></i></button>
                </form>
                <?php
                $authenticate = FALSE; ?>
                <?php if (!$authenticate) { ?>
                    <a class="btn-login" href="/login">
                        <button class="btn btn-primary">
                            Login
                        </button>
                    </a>
                <?php } ?>
                <?php if ($authenticate) { ?>
                    <a class="btn-login" href="/logout">
                        <button class="btn btn-primary">
                            Logout
                        </button>
                    </a>
                <?php } ?>
            </div>
        </nav>

        <section class="section">
        <?php
        $livros = ['dados'];
        foreach ($livros as $livro) { ?>
            <div class="list-group list-books">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Nome do livro <?php echo $livro ?></h5>
                    <small>1 dia atrás <?php echo $livro ?></small>
                    </div>
                    <p class="mb-1">Descrição <?php echo $livro ?></p>
                    <small>Autor da publicação <?php echo $livro ?></small>
                </a>
            </div>
        <?php } 
        if (count($livros) == 0) { ?>
            <div class="message-search col-md-6 offset-md-3 alert alert-primary text-center">
                Infelizmente não econtramos nada para você 
            </div>
        <?php }
        ?>
        </section>

        <footer class="bg-dark text-center">
            <div class="footer">
                <div class="text-muted ">Copyright &copy; Alternabok 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </footer>

    </body>
</html>