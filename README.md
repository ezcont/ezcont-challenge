# Ezcont Challenge | Full Stack

Este desafio é para você que deseja se juntar à equipe do EzCont como desenvolvedor Full Stack.

## Objetivo
  Queremos te conhecer um pouco melhor através da sua metologia e estilo de código.
  
  Estes são alguns pontos que estaremos observando:
  * Raciocínio lógico
  * Entendimento do problema a ser resolvido
  * Organização do código
  * Documentação útil
  * Boas práticas de design
  
  ### Bônus
  * Conhecimento sólido das tecnologias envolvidas
  * Aplicação de padrão de projeto
  * Conhecimento profundo em sql
  * Conhecimento sólido de POO
  
  ## Sobre o Desafio
  
  Você terá que implementar um crud para cadastro de produtos. 
  
  O front deve ser composto por uma grid e um formulário.
  
   ### Grid
   A grid será usada para visualização dos dados e deve possuir os seguintes campos:
   * Código
   * Nome
   * Qtdade Disponível
   * Valor
   
    Além disso, esta interface deve fornecer ações para inserir, editar e excluir um registro.
   
   ### Formulário
   O formulário deve ser composto pelos seguintes campos:
   * Código (read only, seŕá usado para mostrar o código de um produto quando editando)
   * Nome
   * Descrição
   * Qtdade Disponível
   * Qtdade Crítica
   * Valor
   
   #### Validações
   * O campo **nome** deve ser único
   * O campo **descrição** deve conter no máximo 200 caracteres
   * Os campos **qtdade_disponivel** e **qtdade_critica** não devem aceitar valores < 0
   * O campo **valor** não deve aceitar valores <= 0
  
  ### Requisitos
  * Front em Vue.js >= 2.x 
  * Back em Laravel >= 7.x (Php >= 7.4)
  * Banco de dados Mysql (MariaDB) ou Postgresql
  
  ## Para Iniciar
  * Faça um fork deste repositório
  * Coloque o fonte de cada aplicação em suas respectivas pastas conforme repositório
  * Coloque na pasta docs todas as orientações e considerações necessárias para reprodução do seu projeto
  * Faça um branch com o seu nick no github
  * Quando finalizado, faça um Pull Request e aguarde retorno
  
  *Caso tenha qualquer dúvida, abra uma issue aqui.*
  
  
