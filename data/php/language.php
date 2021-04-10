<?php
    $Language = "pt-br";
    if(isset($_COOKIE["Language"]) && $_COOKIE["Language"] != ""){
        $Language = $_COOKIE["Language"];
    }else{
        $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
        if(file_exists("data/php/lang/$lang.php") && $lang != ""){
            $Language = $lang;
        }
        setcookie("Language", $Language);
    }
    if(file_exists("data/php/lang/$Language.php")){
        require_once("data/php/lang/$Language.php");
    }else{
        die(print_r("<h1>Language System PHP</h1><p>ERRO: não foi possível encontrar o arquivo de idioma para ($Language), tenta limpar os Cookies para resolver o problema.</p><hr/>Versão 1.0, Criado por: Trevias Xk", true ));
    }
?>