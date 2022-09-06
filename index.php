<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trenini la Spezia</title>
</head>
<link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center">
        <div id="col1" class="row">
            <div class="col-sm">
            </div>
            <div class="col-lg">
                <h1>Trenini la spezia</h1>
                <form action="function.php" method="post">
                    <input class="modulo" type="time" id="appt" name="appt" required>
                    <select class="form-select modulo" name="btype" required>
                        <option selected disabled>Seleziona Tiket</option>
                        <option value="1">Adulti</option>
                        <option value="2">Bambini</option>
                    </select>
                    <button class="btn btn-primary modulo" type="submit">Stampa Tiket</button>
                </form>       
            </div>
            <div id="col2" class="col-sm">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>