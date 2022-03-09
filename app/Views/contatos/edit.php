<h1>Editando o contato</h1>

<form action="/contatos/<?=$id?>" method="POST">
    <input type="hidden" name="name" value="<?=$id?>">
    <input type="hidden" name="_method" value="PUT" />
    <label for="name">Nome</label>
    <input type="text" name="name" value="<?=$name?>">
    <label for="phone">Telefone</label>
    <input type="text" name="phone" value="<?=$phone?>"><br>
    <input type="submit" value="Atualizar">
</form>
