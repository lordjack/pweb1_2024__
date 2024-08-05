<?php
    include "./aula03_funcao.php";
    include "../db.class.php";

    head();

    $db = new db();
    $db->conn();

    if(!empty($_POST)){
        //var_dump($_POST);
       
        $db->insert([
            'nome'=> $_POST['nome'],
            'telefone'=> $_POST['telefone'],
            'cpf'=> $_POST['cpf'],
        ]);
    }

?>

<div class="col">

    <form action="AlunoForm.php" method="POST">
        <h3>Formulário Aluno</h4>

        <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" 
            class="form-control" name="nome"
            placeholder="Nome">
        </div>

        <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control"
                name="cpf"
            placeholder="000.555.000-55">
        </div>

        <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" 
            class="form-control" name="telefone"
            placeholder="(49) 98800-5500">
        </div>

        <button type="submit"
            class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" 
            href="./AlunoList.php">Voltar</a>
    </form>
</div>

<?php
    footer();
?>