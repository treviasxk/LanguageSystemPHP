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

    if(file_exists("data/php/lang/$Language.php") && $Language != ""){
        require_once("data/php/lang/$Language.php");
    }else{
        setcookie("Language", "");
        die(print_r("<h1>Language System PHP</h1><p>ERRO: não foi possível encontrar o arquivo de idioma para ($Language), vamos tentar te direcionar para o idioma padrão, por favor atualize a página.</p><hr/><i>Versão 1.0, Criado por: Trevias Xk</i>", true ));
    }

    function ChangeLanguage($Language){
        if(isset($_COOKIE["Language"]) && $_COOKIE["Language"] != $Language){
            setcookie("Language", $Language);
            header("location: /");
        }
    }
?>