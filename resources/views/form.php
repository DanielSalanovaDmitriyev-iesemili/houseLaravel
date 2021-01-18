<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <h2>Formulario de locations para añadir!</h2>
    <form action="/houseLaravel/public/form/store" method="GET">
        <label class="row" style="margin-left: 30px;">Id: <input type="text" name="loc_id"></label> 
        <label class="row" style="margin-left: 30px;">Desc: <input type="text" name="loc_desc"></label>
        <button type="submit">Enviar formulario</button>
    </form>
</body>
</html>