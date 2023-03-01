<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Email</title>
</head>
<body>
    <form action="email.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Nome"/>
        </div>
        <div>
            <input type="email" name="email" placeholder="E-mail"/>
        </div>
        <div>
            <textarea type="text" name="msg"></textarea>
        </div>
        <input type="submit" name="enviar"/>
    </form>
</body>
</html>