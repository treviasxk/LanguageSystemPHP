# Language System PHP
 Language System PHP é um sistema simples de idiomas feito em PHP, em que você pode adicionar no seu servidor back-end.
 
## Como funciona?
 No projeto tem 2 arquivos de idiomas adicionado como exemplo dentro da pasta 'data/php/lang', o pt-BR.php (Português-Brasil) e o en-US.php (English - United States), o conteúdo é salvo em uma variável [Array()](https://www.php.net/manual/pt_BR/language.types.array.php), para utilizar no seu website, adicione o arquivo 'data/php/language.php' como include ou require no seu arquivo index.php e utilize dentro do seu código html o código PHP ``<?= $lang[0] ?>`` para exibir o conteúdo.

 ## Funções
  Foi adicionado uma função chamado ``ChangeLanguage(string)``, com ela você pode mudar o idioma do usuário, recomendo que utilize essa função apenas quando adicionar urls amigaveis no arquivos .htaccess, assim quando o usuário acessar '/en-Us', vc passa a variável Resquest para essa função.