<?php
namespace APP\Model;

class Uteis 
{
    public static function redirect(string|array $message, string $session_name = "msg_error", string  $url = "../View/Message.php")
    {
        $_SESSION[$session_name] = $message;
        header("location:$url");
        die;
    }
}
?>