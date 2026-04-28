<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
       foreach ($_POST as $idDaPergunta => $acaoDoBotao) {
        
        // Se a ação do botão for "Alterar"
        if ($acaoDoBotao == "Alterar") {
            // É muito provável que você precise passar esse ID para a próxima página
            // para saber qual pergunta alterar. Por isso adicionei o "?id="
            header("Location: AlterarPerguntaMult.php?id=" . $idDaPergunta);
            exit();
        }
    }
     }
     
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table>
            <tr><th>Pergunta</th><th>Resposta</th></tr>
            <?php
            $arq = fopen("perguntaMult.txt", "r") or die("erro");
            while(!feof($arq)) {
        $linha = fgets($arq);
        $colunaDados = explode(";", $linha);
 
        
        echo "<tr><td>" . $colunaDados[1] . "</td>" .
            "<td>" . $colunaDados[2] . "</td>" .
            "<td>" . $colunaDados[3] . "</td>" .
            "<td>" . $colunaDados[4] . "</td>" .
            "<td>" . $colunaDados[5] . "</td>" .
            "<td>" . $colunaDados[6] . "</td>" . 
            "<td>" . "<form method='post'><input type='submit' value='Exibir'></form> </td>" . 
            "<td>" . "<form method='post'><input type='submit' name='$colunaDados[0]' value='Alterar'></form> </td>" . 
            "<td>" . "<form method='post'><input type='submit' value='Excluir'></form></td> </tr>" ;
           
    }
 
   fclose($arq);
            ?> 
        </table>
         <table>
            <tr><th>Pergunta</th><th>Resposta</th></tr>
            <?php
            $arq = fopen("perguntaDisc.txt", "r") or die("erro");
            while(!feof($arq)) {
        $linha = fgets($arq);
        $colunaDados = explode(";", $linha);
 
 
        echo "<tr><td>" . $colunaDados[0] . "</td>" .
            "<td>" . $colunaDados[1] . " <button>alterar</button> <button>remover</button></td> </tr>" ;
           
    }
 
   fclose($arq);
            ?>
        </table>
    </body>
</html>