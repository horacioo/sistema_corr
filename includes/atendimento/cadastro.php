
<div ng-app="">
    <h2>Cadastro de clientes {{5+4}} </h2>
    <form name="cadastro" method="POST" >
        <p><label>Nome</label><input type="text" required="required" name="cadastro[nome]"></p>
        <p><label>cpf</label><input type="text" required="required" name="cadastro[cpf]"></p>
        <hr>
        <span>adicionar telefone</span>
        <p><label>telefone</label><input type="text" required="required" name="cadastro[telefone][]"></p>
        <hr>
        <label>comentario</label>
        <p><?php wp_editor($content, "editor") ?></p>
        <hr>
        <label>situacao</label>
        <select name="resultado" required="required">
            <option>selecione um resultado para a ligação</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <hr>
        <input type="submit" value="cadastra">
    </form>
</div>