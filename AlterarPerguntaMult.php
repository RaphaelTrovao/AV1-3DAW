<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Adicionar Pergunta Múltipla Escolha: </h1>
        <form action="AlterarPerguntaMult.php" method="POST"> 
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