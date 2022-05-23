<h1 align="center"> CRM </h1>

Esse projeto faz parte de um desafio onde eu tinha que criar uma aplicação onde pode-se se importado uma lista de clientes partir de um arquivo csv ,
Após importado, deve ser possível consultar esses dados em uma lista paginada, que deve ser carregada de forma assíncrona em formato JSON,
Também deve ser possível verificar algumas características dos dados importados, que podem ser exibidos em numa tabela ou gráfico: 
- Quantidade de clientes com ou sem sobrenome
- Quantidade de clientes com email válido ou inválido
- Quantidade de clientes com ou sem gênero.

No desafio foi passado algum pontos que eu tinha que me preocupar no desenvolvimento 
- Utilizar padrões da PSR 
- Arquitetura MVC (ou outra arquitetura que separe as camadas da aplicação)
- Capricho no layout 


## 📁 Acesso ao projeto

- Para ter acesso ao projeto basta baixa ele aqui mesmo do meu github 
- Na raiz do projeto existe um arquivo com o nome de scrip.sql onde tem o scrip que precisar ser rodado no banco para  criação de tabela 
- E também tem um arquivo chamado custimer.csv onde tem os dados dos clientes para serem importado pela aplicação na hora de faze os cadastro de clientes 


## 🛠️ Abrir e rodar o projeto

Infelizmente tive problemas com o wsl então no projeto não passei o Docker com as configurações para criar os contêineres pois não teria como testar se tudo iria funcionar corretamente  
Então utilizei o xampp para rodar o projeto o banco que usei foi do próprio xampp mysql
Para roda o projeto basta jogar dentro da pasta htdocs do apache e no banco basta criar um schema como o nome crm, na raiz do projeto tem um scrip.sql para roda e importar as tabelas 

<h4 align="center"> 
	🚧  CRM 🚀 Finalizado  🚧
</h4>
