<h1>Listagem de contatos</h1>

<?php if($data):?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $contato): ?>
            <tr>
                <td><?=$contato['name'];?></td>
                <td><?=$contato['phone'];?></td>
                <td>
                    <!-- Botão de editar -->
                    <a href="/contatos/<?=$contato['id'];?>/edit">Editar</a>
                    <!-- Botão de excluir -->
                    <a href="#" onclick="document.getElementById('delete').submit();">Deletar</a>
                    <!-- Necessário incluir um form para simular o método DELETE -->
                    <form id="delete" action="contatos/<?=$contato['id'];?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else:?>
    <h2>Nenhum contato cadastrado</h2>
<?php endif; ?>
<a href="/contatos/new">Novo contato</a>