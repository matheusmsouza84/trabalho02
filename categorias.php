<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Venda de carros -Aceitamos Modelos 1950 até 2020</h1>

    <form method="POST" action="salvarCategoria.php?<?php echo $action; ?>">
        <label for="txtNome">Nome do dono do carro:</label>
        <input type="text" name="txtNome" required />
        <br>
        <label for="txtMarca">Fabricante:</label>
        <input type="text" name="txtMarca" required />
        <br>
        <label for="txtModelo">Modelo:</label>
        <input type="text" name="txtModelo" required />
        <br>
        <label for="txtAno">Ano:</label>
        <input type="number" name="txtAno" required
        min="1950" max="2020" />
        <br>
        <label for="txtPlaca">Placa:</label>
        <input type="text" name="txtPlaca" required />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>

    <hr>

    <table id="tbl_categorias">
        <tr>
            <th>Dono do carro</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
           
        </tr>

        <?php
            include_once 'clsConexao.php';
            $query = "SELECT * FROM categorias";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['nomePessoa'].'</td>';
                echo '    <td>'.$cat['fabricante'].'</td>';
                echo '    <td>'.$cat['modelo'].'</td>';
                echo '    <td>'.$cat['ano'].'</td>';
                echo '    <td>'.$cat['placa'].'</td>';
                    
                echo '</tr>';
            }
        ?>
        
    </table>


    
</body>
</html>
