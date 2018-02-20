<h1>RESPOSTAS PARTE B</h1>

1. Operações disponiveis:

1.1 - Lista todos anunciantes através da url:</br>
  http://advmed.piramidesistemas.com.br/web/index.php?r=anunciantesrest </br>
1.2 - Lista anunciante específico através da url(neste caso 2 é o id do anunciante): </br>
  http://advmed.piramidesistemas.com.br/web/index.php?r=anunciantesrest/view&id=2 </br>
  
  Esta operação esta disponível no arquivo: controllers\AnunciantesRest.php
  
  Não consegui fazer todas as operações do CRUD, pois deu um erro no meu Yii :/, mas é perfeitamente possível fazer todas as operações do CRUD através dele, inclusive disponibilizando os dados através de JSON, ao invés de XML como eu fiz.
  </br></br>

2. (Não fiz pois meu Yii não está fazendo método de POST na minha API);
3. (Não fiz pois meu Yii não está fazendo método de PATCH) ;
4. É possível fazer a implementação desta funcionalidade fazendo um select na tabela anuncios where ativo = 1. Com o retorno é possível fazer um foreach buscando os anunciantes que estão ativos. É possível fazer o retorno deste método em um JSON.
  