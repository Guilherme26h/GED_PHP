<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar'; ?>"method="POST">
    Nome:<input type="text" name="Nome" id="Nome"><br>
    Sexo:
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade:<input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="cadastrar">
</form>

<hr>

<h1>Seleção de Dados</h1>

<form name="FormSelect" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/seleciona'; ?>"method="POST">
    Nome:<input type="text" name="Nome" id="Nome"><br>
    Sexo:
    <select name="Sexo" id="Sexo">
        <option value="">Selecione</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade:<input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Pesquisar">
</form>

