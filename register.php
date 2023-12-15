<?php
    if(isset($_POST['submit']))
    {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $idade = $_POST['idade'];
        $genero = $_POST['genero'];
        $telefone = $_POST['telefone'];
        $pcd = $_POST['pcd'];
        $result = mysqli_query($conexao, "INSERT INTO cliente(nome, email, senha, cpf, idade, genero, telefone, pcd) VALUES ('$nome', '$email', '$senha', '$cpf', '$idade', '$genero', '$telefone', '$pcd')");
        
        
    }
?>
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="cadastro">
    <header>
        <h1>Triton</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <section class="sobre">

        <form action="" method="post">
                
            <h2>Cadastre-se</h2>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="email@gmail.com" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
 
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" pattern="\d{11}" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" min="18" required>

            <label>Gênero:</label>
            <select id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="nao_binarie">Não Binárie</option>
                <option value="genero_fluido">Gênero Fluido</option>
            </select><br>

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" pattern="\d{11}" required>
               
                <label for="pcd">Pessoa com Deficiência (PCD):</label>
                <select id="pcd" name="pcd" required>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
               
                <input type="submit" name="submit" id="submit">
                
        </form>
    </section>
    </body>
    
</html>