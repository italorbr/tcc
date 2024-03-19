<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $carbs = $_POST["carboidrato1"] + $_POST["carboidrato2"] + $_POST["carboidrato3"];
    $protein = $_POST["proteina1"] + $_POST["proteina2"] + $_POST["proteina3"];
    $fibraAlimentar = $_POST["fibra1"] + $_POST["fibra2"] + $_POST["fibra3"];
    $gordurasTotais = $_POST["gorduratotal1"] + $_POST["gorduratotal2"] + $_POST["gorduratotal3"];
    $gordurasSat = $_POST["gordurasat1"] + $_POST["gordurasat2"] + $_POST["gordurasat3"];
    $gorduraTrans = $_POST["gorduratrans1"] + $_POST["gorduratrans2"] + $_POST["gorduratrans3"];
    $sodio = $_POST["sodio1"] + $_POST["sodio2"] + $_POST["sodio3"]; 
    $quantidade = $_POST["qtd1"] + $_POST["qtd2"] + $_POST["qtd3"];
    
    
    function calculo($a) {
        return $a / 100;
    }
    
    calculo($quantidade);
    

} else {
    
    echo "Erro: Os dados do formulário não foram recebidos.";
}

?>