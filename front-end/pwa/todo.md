# SumOne Programming Challenge
## Front-End (PWA)

#### Objetivo geral

O objetivo desta challenge é construir a interface e interações de uma lista "To do" em PWA, mas que também funcione em browsers que não suportem as funcionalidades de PWA.

A interface deve ser integrada com uma api do [todobackend](http://todobackend.com), como por exemplo a api de [nodejs com express](http://todo-backend-express.herokuapp.com/).

#### Objetivos de funcionalidades específicas

* Adicionar novos items na lista, ainda não "realizados".
* Alterar um item ainda não "realizado" da lista, mas não permitir alterar os itens já "realizados"
* Marcar items da lista como "realizados".
* Remover um item da lista, "realizado" ou não.
* Remover da lista todos os items já marcados como "realizados".
* A interface deve ser responsiva.
  * Se comportar bem independente do tamanho da tela.

## Objetivos PWA Específicos

* O site só deve exibir a mensagem de instalação após a primeira tarefa adicionada
* Deve ser possível adicionar uma tarefa, marcar como finalizada e excluir uma tarefa estando offline, sincronizando com o backend após estar online novamente
* Cachear a lista de tarefas, economizando requests e também permitindo a lista de forma offline das tarefas já visualizadas

### Objetivos extras

* A lista pode ser paginada.
  * Remover um item da primeira página traz um item da segunda página para frente, etc
* Salvar no nome da tarefa a cidade onde o usuário estava ao criar ela, usando geolocalização
* Implementar um fluxo simples de push notifications, sendo exibida uma push notification sempre que uma tarefa for concluída ou removida.
* Animações, transições...
* Fique livre para inovar no estilo/design/CSS.
* Código bem formatado/legível.

### Sugestões

* É permitido o uso de frameworks/bibliotecas/ferramentas JavaScript(jQuery, React, Webpack, Babel...).
* É permitido o uso de frameworks/bibliotecas/ferramentas CSS(Bootstrap, Tachyons, Sass, Less...).
* Deve ser usado GIT para versionamento.
* Qualquer problema/dúvida técnica não descrita aqui deve ser considerado parte do desafio,
use do seu bom senso e experiência.
* Caso ache necessário, documente no arquivo README decisões de projeto e como rodar o projeto.

### Envio

Nos comunique através de e-mail, com um link para um repositório público no GitHub.

### Disclaimer

Completar a challenge não implica em nenhum vínculo nem obrigação da SumOne
com você. Todo o código criado será descartado. Este challenge usa elementos
reais de necessidades da SumOne apenas como uma maneira de avaliarmos sua
aptidão para o cargo.

### Final notes

Valorizamos muito a capacidade de nos surpreender!

Boa sorte :)
