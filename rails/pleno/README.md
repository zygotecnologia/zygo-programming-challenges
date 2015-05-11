# SumOne Programming Challenge
## Rails Developer Pleno

### Introdução

Na SumOne, usamos Ruby e Rails para resolver problemas de forma rápida,
com alta capacidade de reagir a mudanças e com deploy simples. Sempre que vamos
começar a desenvolver um aplicativo que resolva algum problema que ainda não
temos bem certeza de como devemos abordar, usamos Ruby.
Nas nossas customer-facing pages, sempre usamos Rails, já que com ele fica
fácil de dar manutenção, alterar comportamentos e aperfeiçoar os fluxos de
trabalho de nossos clientes.

Queremos que você não só seja um _railer_ efetivo mas que também saiba
desenvolver aplicativos que façam parte de uma arquitetura maior. É preciso
capacidade de organização, documentação e abstração para conceber tais
sistemas, e é nesses aspectos que vamos mirar nessa challenge.

#### Objetivo da Challenge

O objetivo desta challenge é construir dois aplicativos extremamente simples:

* Um aplicativo em Rails que é basicamente uma API que escreve no DB
* Um aplicativo que conecte na API de _streaming_ do twitter e fique procurando
  posts com uma determinada palavra.

### Challenge

#### Aplicativo Rails

Um aplicativo Rails, extremamente simples, com um endpoint RESTful para
cadastrar novos _tweets_:

* `POST /tweets`

Ele deve validar os tweets recebidos e salvar num Banco de Dados Postgres.

No aplicativo também deve haver uma _rake task_ que traga, da maneira mais
rápida que você conseguir os seguintes dados, baseados nos tweets recebidos:

| Dado | Exemplo |
| ---- | ------- |
| Média de tweets por horário | 12:00 -> 125, 13:00 -> 200, 15:00 -> 475, ... |
| Usuário com maior número de tweets | @joaoxx - 25 tweets |

Simples, não?

**Valem pontos extras:** (não são requisitos)

* Uma boa documentação, dentro e fora do código
* Testes em RSpec (unitários e de integração)
* Compliance com o nosso [Workflow](https://github.com/sumoners/workflow)

#### Crawler do Twitter

Esse é o aplicativo que vai abastecer a aplicação Rails com dados do twitter.

Ele deve receber uma palavra-chave para buscar, conectar na stream _realtime_
do Twitter e passar os tweets recebidos para o aplicativo Rails.
A palavra chave pode ser passada via _environment variable_, arquivo de
configuração, _argv_, o que você quiser.

Você pode usar _gems_ para tornar a sua vida mais fácil :)

**Valem pontos extras:** (não são requisitos)

* Envio assíncrono dos _tweets_ para o Rails (sem parar de receber os
  _tweets_ em realtime)
* Suporte a múltiplas palavras chave
* Gestão de indisponibilidade do app Rails com recuperação de envio
  quando o serviço voltar
* Testes em RSpec
* Compliance com o [Workflow](https://github.com/sumoners/workflow)

### Requisitos técnicos

* Usar Ruby :)
* É permitido o uso de frameworks e _gems_, sem penalização
* A arquitetura e design do sistema devem ser documentadas em um arquivo README
* Deve ser usado GIT para versionamento

### Envio

Envie o seu código pronto através de e-mail, com um link para um repositório
do GitHub.

### Disclaimer

Completar a challenge não implica em nenhum vínculo nem obrigação da SumOne
com você. Todo o código criado será descartado. Este challenge usa elementos
reais de necessidades da SumOne apenas como uma maneira de avaliarmos sua
aptidão para o cargo.

### Final notes

Valorizamos muito a sua capacidade de nos surpreender!

Boa sorte :)
