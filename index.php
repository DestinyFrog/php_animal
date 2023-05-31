<!DOCTYPE html> <html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="#">
    <?php include( "server.php" ); ?>
</head>

<body>
    <h1>Livros:</h1>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Ano</th>
            <th>País</th>
        </tr>

        <?php
        while ( $data = $sql_query->fetch_assoc() ) {
            ?>
            <tr onclick="
                dialog.showModal();
                document.getElementById('dialog_nome').textContent  = this.childNodes[1].textContent;
                document.getElementById('dialog_autor').textContent = this.childNodes[3].textContent;
            ">
                <td> <?php echo $data['nome'];  ?> </td>
                <td> <?php echo $data['autor']; ?> </td>
                <td> <?php echo $data['ano'];   ?> </td>
                <td> <?php echo $data['pais'];  ?> </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <button>Adicionar Itens</button>

    <dialog id="dialog">
        <h1 id="dialog_nome"></h1>
        <h2 id="dialog_autor"></h2>
        <button onclick="dialog.close()">Fechar</button>
        <button onclick="dialog.close()">Salvar</button>
    </dialog>
</body>

</html>