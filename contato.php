<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php"); ?>
</head>

<body>
    <?php require_once ("menu.php"); ?>
    <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleInputName">Nome:</label>
                    <input type="name" class="form-control" id="exampleInputName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputAssunto">Assunto:</label>
                    <input type="assunto" class="form-control" id="exampleInputAssunto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">Mensagem:</label>
                    <input type="message" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>

            <?php require_once("footer.php"); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>







