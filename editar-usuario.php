<h1>EDITAR USUARIO</h1>
<?php
    $sql = "SELECT * FROM tb_usuarios 
    WHERE id=".$_REQUEST["id"];
    $res = $conn->mysql_query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>NOME</label>
        <input type="text" name="NOME_USUARIO" 
        value="<?php print $row->NOME_USUARIO ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-MAIL</label>
        <input type="email" name="EMAIL_USUARIO" class="form-control">
    </div>
    <div class="mb-3">
        <label>SENHA</label>
        <input type="password" name="SENHA_USUARIO" class="form-control">
    </div>
    <div class="mb-3">
        <label>DATA DE NASCIMENTO</label>
        <input type="text" name="DATA_NASC_USUARIO" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-primary">ENVIAR</button>
    </div>
</form>