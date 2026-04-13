<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if(!file_exists("usuario.txt")){
        $arq = fopen("usuario.txt", "w") or die("Não foi possível criar o arquivo");
        $linha = "nome;email;senha\n";
        fwrite($arq,$linha);
            fclose($arq);
    }
    $arq = fopen("usuario.txt", "a") or die("Não foi possível abrir o arquivo");
    $linha = $nome . ";" . $email . ";" . $senha . "\n";
    fwrite($arq,$linha);
    fclose($arq);
    $msg = "cadastrado";
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Cadastrar usuário: </h1>
        <form action="usuario.php" method="POST">
            Nome:<input type="text" name="nome">
            Email:<input type="email" name="email">
            Senha:<input type="password">
            Confirmar Senha:<input type="password" name="senha">
            <button type="submit">Cadastrar</button>
        </form>
        <p> <?php echo $msg ?> </p>
    </body>
</html>