<?php

include "config/conexao.php";

$sql = "SELECT * FROM tb_produtos";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Estoque Fácil</h1>
        <h2>Lista de Produtos</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Imagem</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ação</th>
            </tr>

            <?php while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $produto["id"]; ?></td>

                    <td>
                        <?php if ($produto["imagem"]) : ?>
                            <img class="imagem-produto"
                                src="uploads/<?= $produto["imagem"] ?>"
                                alt="Imagem do produto">
                        <?php else: ?>
                            <span>Sem imagem</span>
                        <?php endif; ?>
                    </td>

                    <td><?php echo $produto["nome"]; ?></td>
                    <td><?php echo $produto["categoria"]; ?></td>
                    <td>R$ <?php echo number_format($produto["preco"], 2, ',', '.'); ?></td>
                    <td><?php echo $produto["qtd"]; ?></td>

                    <td>
                        <a href="editar.php?id=<?php echo $produto["id"]; ?>">Editar</a>
                        |
                        <a href="excluir.php?id=<?php echo $produto["id"]; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

        <br>
        <a href="cadastrar.html">Voltar ao cadastro</a>

    </div>

</body>

</html>