# Language System PHP
 Language System PHP é um sistema simples de idiomas feito em PHP, em que você pode adicionar no seu servidor back-end.
 
## Como funciona?
 No projeto tem 2 arquivos de idioma adicionado como exemplo, o pt-BR (Português-Brasil) e o en-US (English - United States), o conteúdo é salvo em uma variável [Array()](https://www.php.net/manual/pt_BR/language.types.array.php), para utilizar no seu website, adicione o arquivo 'data/php/language.php' como include ou require no seu arquivo index.php e utilize dentro do seu código html o código PHP ``<?= $lang[0] ?>`` para exibir o conteúdo.

 ## Funções
  Foi adicionado uma função chamado ``ChangeLanguage(string)``, com ela você pode mudar o idioma do usuário.