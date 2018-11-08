<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5" >
    <div class="row">
        <div class="col-12">
            <h1 >Page Error</h1>
            <hr>
            <p class="alert alert-danger"><b>Code error: </b><?php echo $errno ?></p>
            <p class="alert alert-danger"><b>Text error: </b><?php echo $errstr ?></p>
            <p class="alert alert-danger"><b>File error: </b><?php echo $errfile ?></p>
            <p class="alert alert-danger"><b>Line error: </b><?php echo $errline ?></p>
        </div>
    </div>
</div>
</body>
</html>