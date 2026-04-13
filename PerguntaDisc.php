<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pergunta = $_POST["pergunta"];
        $r = $_POST["res"];
        if(!file_exists("perguntaDisc.txt")){
        $arq = fopen("perguntaDisc.txt", "w") or die("Não foi possível criar o arquivo");
        $linha = "pergunta;respostaA\n";
        fwrite($arq,$linha);
            fclose($arq);
    }
    $arq = fopen("perguntaDisc.txt", "a") or die("Não foi possível abrir o arquivo");
    $linha = $pergunta . ";" . $r ."\n";
    fwrite($arq,$linha);
    fclose($arq);
    $msg = "Pergunta Adicionada";
    }

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Adicionar Pergunta Discursiva: </h1>
        <form action="PerguntaDisc.php" method="POST"> 
            Insira a pergunta: <input type="text" name="pergunta" required>
            <br><br>
            Resposta : <input type="text" name="res" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
        <p><?php echo $msg?></p>
    </body>
</html>