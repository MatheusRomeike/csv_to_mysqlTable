<!-- 
Esse é um código genérico de formulário, para o recebimento do arquivo de extensão csv.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    
  <h2>Upload CSV</h2>
  <form action="importar.php" method="post" enctype="multipart/form-data">

  <form action="/action_page.php">
    <div class="checkbox">
      <label><input type="file" name="file"></label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</div>
</div>

</body>
</html>
