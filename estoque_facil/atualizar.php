
<?php
include "config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE tb_produtos SET
        nome = :nome,
        categoria = :categoria,
        preco = :preco,
        qtd = :quantidade
        WHERE id = :id";

$stmt = $conexao->prepare($sql);

$stmt->execute([
    'nome' => $nome,
    'categoria' => $categoria,
    'preco' => $preco,
    'quantidade' => $quantidade,
    'id' => $id
]);

echo "Produto atualizado com sucesso!✅";
echo "<br><a href='listar.php'>Voltar</a>";
?>
