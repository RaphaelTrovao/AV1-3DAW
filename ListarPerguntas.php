<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr><th>Pergunta</th><th>Resposta</th></tr>
            <?php
            $arq = fopen("perguntaMult.txt", "r") or die("erro");
            while(!feof($arq)) {
        $linha = fgets($arq);
        $colunaDados = explode(";", $linha);
 
 
        echo "<tr><td>" . $colunaDados[0] . "</td>" .
            "<td>" . $colunaDados[1] . "<button>alterar</button> <button>excluir</button></td>" ;
           
    }
 
   fclose($arq);
            ?>
        </table>
    </body>
</html>