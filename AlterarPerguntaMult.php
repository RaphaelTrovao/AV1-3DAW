<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pergunta = $_POST["pergunta"];
        $rA = $_POST["resA"];
        $rB = $_POST["resB"];
        $rC = $_POST["resC"];
        $rD = $_POST["resD"];
        $id = $_POST["id"];
        $gabarito = $_POST["respostaCorreta"];
        $fn = "perguntaMult.txt";
        $lines = file($fn);
        $idfind = false;
        foreach ($lines as $indx => $lin){
             $colunaDados = explode(";", $lin);
             if($colunaDados[0] == $id){
                $nwl = $id . ";" . $pergunta . ";" . $rA . ";" . $rB . ";" . $rC . ";" . $rD . ";" . $gabarito . "\n";
                $lines[$indx] = $nwl;
                $idfind = true;
                break;
             }
        }
        if($idfind){
            file_put_contents($fn, implode("", $lines));
        }
     }

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    // 2. Armazenamos o ID em uma variável
    $id = $_GET['id'];
    
   
    // ---> AQUI ENTRA A SUA LÓGICA DE ALTERAÇÃO <---
    // Agora você usa esse $id_da_pergunta para varrer o seu arquivo "perguntaMult.txt"
    // e encontrar qual linha tem a pergunta que o usuário quer editar.
    $arq = fopen("perguntaMult.txt", "r") or die("erro");
     while(!feof($arq)) {
        $linha = fgets($arq);
        $colunaDados = explode(";", $linha);
         foreach($colunaDados as $vs){
            if($vs == $id){
               $pr = $colunaDados[1];
               $a = $colunaDados[2];
               $b = $colunaDados[3];
               $c = $colunaDados[4];
               $d = $colunaDados[5];
               $rc = $colunaDados[6];
            }
        }
       
     }
     

} else {

    
    echo "Nenhuma pergunta foi selecionada.";
    
    // O ideal aqui é redirecionar o usuário de volta para a tabela principal
    // header("Location: pagina_da_tabela.php");
    // exit();
}


?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Alterar Pergunta Múltipla Escolha: </h1>
        <form action="AlterarPerguntaMult.php" method="POST"> 
            <input type="hidden" name="id" value="<?php echo $id; ?>">
           pergunta <input type="text" name="pergunta" value="<?php echo $pr; ?>" required>
            <br><br>
            Resposta A: <input type="text" name="resA" value="<?php echo $a; ?>" required>
            <br><br>
            
            Resposta B: <input type="text" name="resB" value="<?php echo $b; ?>" required>
            <br><br>
            
            Resposta C: <input type="text" name="resC" value="<?php echo $c; ?>" required>
            <br><br>
            
            Resposta D: <input type="text" name="resD" value="<?php echo $d; ?>" required>
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