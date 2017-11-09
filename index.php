<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Sistema de Busca</title>

    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/3.3/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Sobre</a></li>
            <li role="presentation"><a href="#">Contato</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Sistema De Busca</h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
          <form>
            <input id="busca" type="text" class="form-control" placeholder="Buscar Cliente">
          </form>
          <p id="result"></p>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2017 ScriptMundo.</p>
      </footer>

    </div> <!-- /container -->
    <script>
      $("#busca").keyup(function(){
        var busca = $("#busca").val();
        $.post('busca.php', {busca: busca},function(data){
          $("#result").html(data);
        });
      });
      $("#busca").focusout(function(){
        $("#result").html("Pesquisar Por Clientes!");
      })
    </script>
  </body>
</html>
