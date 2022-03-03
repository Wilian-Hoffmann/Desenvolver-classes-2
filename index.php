<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Web II</title>
    <style> 
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Atividade Tabela PHP</h2>
    <?php
        include 'autoload.php';

        if (isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        } else {
            $pagina = 1;
        }

        $colunas = array ( 
            new Coluna("Alimento"), 
            new Coluna("País")
        );
        $alimentos = array (
            new alimento("Wurst ", "Alemanha"),
            new alimento("Parrillada ", "Argentina"),
            new alimento("Moussaka ", "Grécia"),
            new alimento("Lámen ", "China"),
            new alimento("Pad Thai", "Tailândia"),
            new alimento("Menemen", "Turquia"),
            new alimento("Spaghetti alla carbonara", "Itália"),
            new alimento("Ratatouille ", "França"),
            new alimento("Bacalhau", "Portugal"),
            new alimento("Pozole ", "México"),
            new alimento("Borscht ", "Rússia "),
            new alimento("Borscht ", "Ucrânia"),
            new alimento("Chamuça ", "Índia"),
            new alimento("Fish and Chips", "Reino Unido"),
            new alimento("Paella ", "Espanha"),
            new alimento("Hambúrguer ", "Estados Unidos"),
            new alimento("Lámen", "Japão"),
            new alimento("Parrillada", "Uruguai"),
            new alimento("Feijão e Arroz", "Brasil"),
            new alimento("Pizza", "Italia"),
            new alimento("Sushi", "Japão")
        );

        $tabela = new Tabela($alimentos, $colunas, $pagina);
        echo $tabela;
    ?>

    <div class="paginacao">

        <?php 
            for($i = 1; $i <= ceil(count($alimentos)/10); $i++) {
                echo '<a href="?pagina=' . $i . ' ">' . $i . '</a>';
                echo ' ';
            }
        ?>
    </div>

</body>
</html>