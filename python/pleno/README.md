# SumOne Programming Challenge
## Python Developer Pleno

### Introdução

Na SumOne utilizamos python no desenvolvimento do aplicativo desktop windows que roda nos computadores dos nossos clientes e se comunica com o nossa API restful. Temos também algumas funções rodando no AWS Lambda, feitas para rodar processamentos pesados e assíncronos, de forma a deixar nosso servidor principal leve e focado em atender os requests síncronos dos nossos clientes.

### Desafio

Implementar um aplicativo desktop em python com os seguintes requisitos:

* A tela inicial deve ser uma tela de login onde seja pedido o username e a senha do usuário
* O usuário logado possa registrar compras feitas pelos clientes. Cada compra deve salvar o valor total, o CPF do cliente e a hora em que foi realizada e o usuário que registrou essa compra.
* Possuir uma parte de acompanhamento simples onde o usuário logado possa visualizar as compras registradas e as informações de cada uma.
* Na listagem de compras deve ser possível filtrar as compras por data, valor mínimo e usuário.

#### Requisitos Técnicos

* Usar Python
* É permitido o uso de frameworks e _libs_, sem penalização, inclusive para a parte de configuração do aplicativo desktop. Na SumOne utilizamos o PyQt, então caso queira usar ele ou alguma outra ferramenta similar pode ficar a vontade.
* Todas as informações, compras e usuárioes, devem estar salvas em um banco de dados local, como sugestão indicamos o sqlite, mas pode escolher o de sua preferência.
* Deve ser usado GIT para versionamento

#### O que vamos avaliar

* Estrutura e organização do código de todas as funcionalidades implementadas

**Valem pontos extras:** (não são requisitos)

* Testes automatizados das funcionalidades criadas;
* README explicando como rodar e testar o aplicativo;

### Envio

Envie o seu código pronto através de e-mail, com um link para um repositório
do GitHub.
