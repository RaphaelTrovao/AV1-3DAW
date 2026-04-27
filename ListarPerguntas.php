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
 
 
        echo "<tr><td>" . $colunaDados[0] . "</td>" .
            "<td>" . $colunaDados[1] . "</td>" .
            "<td>" . $colunaDados[2] . "</td>" .
            "<td>" . $colunaDados[3] . "</td>" .
            "<td>" . $colunaDados[4] . "</td>" .
            "<td>" . $colunaDados[5] . " <button>alterar</button> <button>remover</button></td> </tr>" ;
           
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