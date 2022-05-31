<?php
//Bernardo--
//criação de classe de validação 
namespace APP\Model;
class Validation
{
    //criação das requisições que serão cobradas no client.php
    public static function validateId(int $id)
    {
        return $id > 0;
    }
    public static function validateName(string $username): bool
    {
        return strlen($username) > 2 && !is_numeric($username);
    }

    public static function validateTelefone(string $Telefone)
    {
        return preg_match("/^\(?\d{2}\)?[\s-]?\d{5}-?\d{4}$/", $Telefone);
    }

    public static function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
?>