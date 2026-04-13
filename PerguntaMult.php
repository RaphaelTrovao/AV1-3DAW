<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pergunta = $_POST["pergunta"];
        $rA = $_POST["resA"];
        $rB = $_POST["resB"];
        $rC = $_POST["resC"];
        $rD = $_POST["resD"];
        $gabarito = $_POST["respostaCorreta"];
        if(!file_exists("perguntaMult.txt")){
        $arq = fopen("perguntaMult.txt", "w") or die("Não foi possível criar o arquivo");
        $linha = "pergunta;respostaA;respostaB;respostaC;respostaD;respostaCerta\n";
        fwrite($arq,$linha);
            fclose($arq);
    }
    $arq = fopen("perguntaMult.txt", "a") or die("Não foi possível abrir o arquivo");
    $linha = $pergunta . ";" . $rA . ";" . $rB . ";" . $rC . ";" . $rD . ";" . $gabarito ."\n";
    fwrite($arq,$linha);
    fclose($arq);
    $msg = "Pergunta Adicionada";
    }

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Adicionar Pergunta Múltipla Escolha: </h1>
        <form action="PerguntaMult.php" method="POST"> 
            Insira a pergunta: <input type="text" name="pergunta" required>
            <br><br>
            Resposta A: <input type="text" name="resA" required>
            <br><br>
            Resposta B: <input type="text" name="resB" required>
            <br><br>
            Resposta C: <input type="text" name="resC" required>
            <br><br>
            Resposta D: <input type="text" name="resD" required>
            <br><br>
            <input type="radio" name="respostaCorreta" value="A" required> A
            <input type="radio" name="respostaCorreta" value="B" required> B
            <input type="radio" name="respostaCorreta" value="C" required> C
            <input type="radio" name="respostaCorreta" value="D" required> D
            <br><br>
            <button type="submit">Enviar</button>
        </form>
        <p><?php echo $msg?></p>
    </body>
</html>