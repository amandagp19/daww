
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Perfume</title>
</head>
<body>
    <form action="inserir_ok.php" method="post" enctype="multipart/form-data">
        Nome:
        <input type="text" name="nome" /><br>
        
        Descrição:
        <textarea name="descricao"></textarea><br>
        
        Preço:
        <input type="text" name="preco" /><br>
        
        idCategoria:
        <input type="number" name="idCategoria" /><br>
        
        idFragrancia:
        <input type="number" name="idFragrancia" /><br>
        
        idMarca:
        <input type="number" name="idMarca" /><br>
        
        Volumeml:
        <input type="number" name="volume_ml"/><br>

        Oferta:
        <input type="text" name="oferta"/><br>
        
        Estoque:
        <input type="number" name="estoque" /><br>
        
        Imagem:
        <input type="file" name="imagem[]" multiple/><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
