<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div>
            <h1>triton</h1>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

    </header>
    <section class="sobre">
        <form action="" method="post">

            <h2>Compre sua passagem de ônibus e ganhe uma experiência inesquecível</h2>

            <label for="cp_k">De onde você vai sair:</label>
            <input type="text" maxlength="20" id="cp_k">
            
            <label for="cp_k">Para onde você vai:</label>
            <input type="text" maxlength="20" id="cp_k">

            <label for="cp_date">Data de ida:</label>
            <input type="date" id="cp_date">
            
            <label for="cp_date">Data de volta:</label>
            <input type="date" id="cp_date">
            
            <input id="submit" type="submit" value="enviar">
        </form>
        
        
    </section>

</body>

</html>