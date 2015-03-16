# SumOne Programming Challenge
## Front-End Engineer Pleno

### Introdução

Na SumOne, desenhamos sistemas que sejam não apenas robustos e rápidos, mas que
se integrem com a maneira de pensar de nossos clientes e com o seu cotidiano.
Acreditamos que a melhor maneira para gerar resultados é minimizar a curva de
aprendizado necessária para que se possa utilizar nossos softwares.

Uma das formas de fazer isso é pegando carona em paradigmas de interação que
acontecem no mundo físico, trazendo-os para o mundo virtual, ou até mesmo
mimetizando as interfaces de aplicativos bem difundidos.

#### Objetivo da Challenge

O objetivo desta challenge é construir duas interfaces:

* Uma interface para consumidores finais
* Uma interface para gestores de marketing

### Challenge

#### Interface para consumidores finais

**Contexto Simulado**: Fomos contratados por uma rede de lojas de varejo de
moda para construir uma interface para o sistema de _loyalty_ deles. O sistema
é extremamente básico, possuindo as seguintes características:

* Cada cliente possui um número X de pontos
* Existem 3 _tiers_: Normal, Prata (a partir de 5000 pontos) e Gold (a partir
  de 10000 pontos).
* Os clientes devem tirar fotos de seus cupons fiscais para ganhar pontos
* Cada _tier_ possui benefícios exclusivos:

  | Tier | Benefícios |
  | ---- | ---------- |
  | Normal | Newsletter |
  | Prata | Newsletter + Fila rápida |
  | Gold | Newsletter + Fila rápida + Personal Shopper |

A ideia é ter três interfaces:

  * Perfil (exibindo nome do cliente, pontos e tier)
  * Benefícios (exibindo os benefícios do cliente)
  * Tirar foto (para o cliente tirar uma foto)

Você deve desenhar, usando CSS+HTML+JS ou Interface Builder iOS ou o Android
Studio uma interface de **loyalty**, somente com acesso _mobile_ para
consumidores finais.
A interface não precisa funcionar e não deve ser integrada a nenhum sistema!

**Serão avaliados:** apenas a organização do código, uso das ferramentas disponíveis,
conhecimento e domínio sobre as linguagens e a capacidade de implementação das
especificações

#### Interface para gestores de marketing

**Contexto Simulado**: Devemos construir um painel de _loyalty_ onde o nosso
cliente possa ter acesso as seguintes informações, de um determinado período:

* Pontos dados, por dia do período
* Clientes presentes no Tier 1, Tier 2 e Tier 3
* Número total de cupons fiscais resgatados no período
* Faturamento do período pelos cupons fiscais

A ideia é ter uma só interface que seja capaz de exibir essas métricas, de uma
forma organizada e fácil de se navegar. É um "dashboard" no melhor estilo
_google analytics_.

Você deve usar HTML+CSS+JS, podendo utilizar bibliotecas externas caso for
gerar gráficos, elementos visuais complexos, etc ...
A interface deve ser **responsiva** (pode usar framework).
Não deve ser funcional, apenas exibir dados pré-determinados.

**Serão avaliados**: Capacidade de organização do código, interface, capacidade
de construir sistemas responsivos, ortogonalidade e design do código dos
componentes.

### Requisitos técnicos

* Usar HTML, CSS e JS ou Interface Builders Mobile (para casos específicos)
* É permitido o uso de frameworks e bibliotecas JS como React, jQuery, ...
* O código deve ser documentado e testado (JS)
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

Valorizamos muito a capacidade de nos surpreender!

Boa sorte :)
