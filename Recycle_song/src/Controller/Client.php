<?php 
//Bernardo
//função utiliza para permitir acesso as validações no cadastro.php
use APP\Model\Validation;

//criação da função de inserção de clientes
function insertClient()
{
    $username = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $error = array();

    if (!Validation::validateName($username)) {
        array_push($error, "Nome inválido!!!");
    }

    if (!Validation::validateEmail($email)) {
        array_push($error, "Email inválido!!!");
    }

    if (!Validation::validatePhone($Telefone)) {
        array_push($error, "Telefone inválido!!!");
    }

    // Caso haja algum erro o cliente será redireciado a uma página de erro.
    if (count($error) > 0) {
        Uteis::redirect(message: $error, session_name: "msg_validation_erro");
    } else {
        $username = new Client($username, $Telefone, $email);
      // Caso não haja nenhum erro os dados serão salvos no bancos de dados e será emitido a mensagem de criação foi concluída com sucesso
        $result = ClientDAO::insertClient($username);
        if ($result) {
            Uteis::redirect(message: "Usuário cadastrado com sucesso!!!", session_name: "msg_confirm");
        } else {
            Uteis::redirect("Não foi possível cadastrar o cliente!!!");
        }
    }
}



?>