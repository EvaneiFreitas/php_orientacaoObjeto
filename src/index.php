<?php
require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'listar':
        echo '<h3> PRODUTOS </h3>';
        foreach ($produto->listar() as $value) {
            # code...
            echo 'Id:' . $value['id'] . '<br> Descrição: ' . $value['descricao'] .'<hr>';
        }
        break;



    case 'atualizar':
        $status = $produto->atualizar('Curso de Php', 8);
        if(!$status)
        {
            echo 'Não foi possível atualizar os dados!!!';
            return false;
        }
            echo 'Registro atualizado com sucesso!!!';
        break;


    
    case 'inserir':
        $status = $produto->inserir('Produto teste 2');
        if(!$status)
        {
            echo 'Não foi possível realizar a inserção de dados!!!';
            return false;
        }
            echo 'Registro adicionado com sucesso!!!';
        break;




    case 'excluir':
        $status = $produto->deletar(9);
        if(!$status)
        {
            echo 'Não foi possível excluir os dados!!!';
            return false;
        }
            echo 'Registro excluido com sucesso!!!';
        break;

}