<?php 
$nome = 'Cotil';
echo $nome;
echo "<br><br>";
 
var_dump($nome);
echo "<br><br>";
$outroNome = "UNICAMP";
echo $nome ." ". $outroNome;
echo "<br><br>";
$valor = 50.15; 
echo $valor;

$op = 3;

echo "<br><br>";
switch($op){
    case 1:
        echo "cadastrado";
        break;
        case 2:
            echo "relatorios";
            break;
            case 3:
                echo "teste";
                break;
            default:
            echo "opção invalida";
            break;
}

$x = 2;
if ($x%2 == 0){
    $resultado = "par";
}
else{
    $resultado = "impar";
}
echo "<br><br>",$resultado;
?>  