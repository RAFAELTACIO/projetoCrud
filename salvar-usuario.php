<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $NOME_USUARIO = $_POST["NOME_USUARIO"];
            $EMAIL_USUARIO = $_POST["EMAIL_USUARIO"];
            $SENHA_USUARIO = md5($_POST["SENHA_USUARIO"]);
            $DATA_NASC_USUARIO = $_POST["DATA_NASC_USUARIO"];

            $sql = "INSERT INTO tb_usuarios (
                NOME_USUARIO,
                EMAIL_USUARIO,
                SENHA_USUARIO,
                DATA_NASC_USUARIO
                ) 
                VALUES (
                '{$NOME_USUARIO}',
                '{$EMAIL_USUARIO}',
                '{$SENHA_USUARIO}',
                '{$DATA_NASC_USUARIO}'
                )";
           
            $res = $conn->query($sql);
            if ($res==true){
                print "<script>alert('CADASTRADO COM SUCESSO');</script>";
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('NAO FOI POSSIVEL CADASTRAR');</script>";
                print "<script>location.href='?page=novo'</script>";
            };
            break;

            

        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;
    }