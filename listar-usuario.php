<h1>LISTAR USUARIO</h1>
<?php
    $sql = "SELECT * FROM tb_usuarios";

    $res = $conn->query($sql);

    $qtd = $res-> num_rows;

    if($qtd > 0){
        print "<table class='table table-hover'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>NOME</th>";
            print "<th>EMAIL</th>";
            print "<th>DATA DE NASCIMENTO</th>";  
            print "<th>AÇÕES</th>";   
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->ID_USUARIO."</td>";
            print "<td>".$row->NOME_USUARIO."</td>";
            print "<td>".$row->EMAIL_USUARIO."</td>";
            print "<td>".$row->DATA_NASC_USUARIO."</td>";
            print "<td> 
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>EDITAR</button>
                <button class='btn btn-danger'>EXCLUIR</button>
            </td>";       
            print "</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert-danger'>
            NÃO ENCONTROU RESULTADOS
        </p>";
    }
?>