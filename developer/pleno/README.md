# Zygo Programming Challenge
## Developer Pleno

### Introdução

Na Zygo, utilizamos RubyOnRails na maioria das soluções que desenvolvemos,
mas estamos atentos também a frameworks javascripts para criar soluções
com a melhor usabilidade possível para nossos clientes.

Queremos que você não só seja um _developer_ efetivo mas que também saiba
desenvolver aplicativos que façam parte de uma arquitetura maior. É preciso
capacidade de organização, documentação e abstração para conceber tais
sistemas, e é nesses aspectos que vamos mirar nesse desafio.

#### Objetivo do desafio

Contruir um sistema simples de livros, onde usuários comuns podem acessar e buscar por livros.

#### Desafio

* O sistema deve possuir uma autenticação somente para admins e permitir que admins cadastrados criem, editem e removam livros(usuários comuns não podem ter acesso a essa página);
* Os livros devem possuir um título, uma descrição, uma imagem(pode ser uma url de uma imagem na internet) e o nome do autor;
* A página inicial deve ser a listagem dos livros, não precisando de login para ser acessada, permitindo assim o acesso de qualquer usuário;
* Na página da listagem de livros, deve ser possível realizar a busca por texto, filtrando a lista para exibir livros que possuam o texto digitado no campo de título e/ou no campo de descrição; Também deve ser possvel buscar por autor; Essa busca deve ser feita preferencialmente no servidor, usando ruby;
* Deve ser possível ordenar a lista de livros por título de forma crescente ou decrescente;
* Tanto o filtro como a ordenação dos livros deve ser feita de forma dinâmica, sem recarregar a página inteira a cada texto digitado ou ordenação alterada;
* Testes automatizados unitários

**Valem pontos extras:** (não são requisitos)

* Testes automatizados de integração
* Uso de algum framework css para montar o layout das páginas (Ex: Bootsrap, Materialize, etc);
* Layout responsivo;

### Requisitos técnicos

* Usar RubyOnRails :)
* É permitido o uso de frameworks e _gems_, sem penalização
* A arquitetura e design do sistema devem ser documentadas em um arquivo README
* Deve ser usado GIT para versionamento

### O que será avaliado

* Documentação e estrutura do código(Clean code)
* Estrutura do testes(caso tenha sido feito)
* Organização dos commits;
* Boa organização e estrutura das views

### Envio

Envie o seu código pronto através de e-mail, com um link para um repositório
do GitHub.

### Disclaimer

Completar o desafio não implica em nenhum vínculo nem obrigação da Zygo
com você. Todo o código criado será descartado. Este desafio usa elementos
reais de necessidades da Zygo apenas como uma maneira de avaliarmos sua
aptidão para o cargo.

### Final notes

Valorizamos muito a sua capacidade de nos surpreender!

Boa sorte :)
