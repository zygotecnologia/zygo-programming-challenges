# S1 Challenge

## Instruções

Esse documento descreve o desafio para desenvolvedores da SumOne em termos de
requisitos e entregáveis. Por favor, leia com cuidado antes de iniciar o teste.

Esse desafio consiste em projetar um serviço de ordenação.

## Requisitos

Você foi convidado a desenvolver o projeto e implementação de uma aplicação de
gestão de bibliotecas. Como você trabalha de forma iterativa, sua primeira
escolha foi criar um serviço de ordenação e classificação das obras dessa
biblioteca, respeitando os requisitos a seguir.


### Requisitos Funcionais

O caso de uso abaixo representa um dos possíveis casos do uso para o **Serviço
de Ordenação**. Embora pareça um caso muito simples, preste atenção a seção
**Requisitos Especiais**.

1. O **Cliente do Serviço de Ordenação** envia um conjunto de livros a serem
   ordenados pelo **Serviço de Ordenação**
2. O **Serviço de Ordenação** ordena o conjunto de livros pelo título e nome do
   autor, ambos de forma ascendente.
3. O **Serviço de Ordenação** retorna a lista de livros ordenados para o
   **Cliente do Serviço de Ordenação**

#### Requisitos Especiais

O **Serviço de Ordenação** considera um ou mais atributos para ordenar os
livros. Para cada atributo, uma direção de ordenação pode ser definida:
Ascendente ou Descendente. Por exemplo, no ponto 2 do fluxo, ele considera o
título e o nome do autor, ambos de forma ascendente.

Dessa forma é importante para esta solução prover os meios para preparar o
**Serviço de Ordenação** com os atributos e suas direções.

É restrição da implementação que, sem qualquer modificação no código do **Serviço
de Ordenação**, e através de um **arquivo de configuração**, o projeto permita 
a configuração dos atributos e direções do **Serviço de Ordenação**.

#### Casos de teste

Dada a seguinte lista de livros:

| #   | Título                                          | Author            | Edition Year |
| --- | ----------------------------------------------- | ----------------- | ------------ |
| 1   | Java How To Program                             | Deitel & Deitel   | 2007         |
| 2   | Patterns of Enterprise Application Architecture | Martin Fowler     | 2002         |
| 3   | Head First Design Patterns                      | Elisabeth Freeman | 2004         |
| 4   | Internet & World Wide Web: How to Program       | Deitel & Deitel   | 2007         |


Os seguintes casos de teste devem passar na implementação:

| Regras de Ordenação                                      | Valor Esperado    |
| -------------------------------------------------------- | ----------------- |
| Título Ascendente                                        | Livros 3, 4, 1, 2 |
| Autor Ascendente, Título Descendente                     | Livros 1, 4, 3, 2 |
| Edição descendente, Autor descendente, Título ascendente | Livros 4, 1, 3, 2 |
| Null                                                     | OrderingException |
| (Vazio)                                                  | (Vazio)           |


### Outros Requisitos

Esse serviço envolve várias escolhas de projeto que precisam ser feitas. Em
todos os casos, os seguintes princípios se aplicam.

#### Clareza e Mantenibilidade

Um projeto claro, que vai ser entendido facilmente inclusive por programadores
juniores será preferido ao invés de um complexo, mesmo que o complexo seja um
pouco mais performático. Por outro lado, um algoritimo pobre onde soluções
padrão são bem conhecidas será penalizado.

#### Documentação

O código em si só deve ser claro e "óbvio" de forma que comentários devem ser
evitados. Apenas códigos mais complexos devem ser comentados.

#### Correto

O projeto deve implementar os requisitos e passar nos casos de teste
solicitados. Por mais que não seja obrigatório, você está livre para adicionar
testes automatizados caso julgue necessário.

#### Uso de frameworks

Frameworks externos podem fazer parte da solução, dado que tal framework e suas
dependências sejam configurados utilizando uma biblioteca de gestão de
dependências.

#### Desacoplamento

Mudanças na implementação não devem afetar a interface pública do serviço de
ordenação. Isso se aplica também a frameworks externos, visto que esses também
são detalhes de implementação.

#### Estado da Arte

Este projeto deve usar "design patterns" sempre que apropriado. Não invente seu
próprio design quando uma solução já conhecida existe. Melhores práticas devem
ser aplicadas tanto para o projeto quanto ao código da solução.

#### Plataforma

Ao longo do teste você deve utilizar a linguagem especificada por e-mail. Você
não precisa desenvolver o código utilizando uma implementação particular da
linguagem, mas sua submissão deve ter sido testada e pronta para funcionar em
uma versão de produção (não desenvolvimento) da implementação mais utilizada da
plataforma em questão.

#### Git

Você deve submeter sua solução através de um repositório público do GitHub. Os
commits devem ser atômicos, ou seja, conter o menor conjunto de arquivos que
contenham uma etapa completa de uma evolução na sua base de código. As mensagens
devem ser completas e explicativas.

#### Duração

Esse desafio foi projetado para precisar de no máximo 4 horas de trabalho.

## Execução da Solução

Sua solução deve estar pronta para rodar em produção. Ela pode ser desenvolvida
em qualquer IDE ou editor da sua escolha, mas não deve conter vestígios ou
qualquer dependência dos mesmos.

Quando enviar sua solução, você deve empacotá-la provendo instruções de como
executar seu código.

## Entregáveis

Sua solução deve conter:

* Um documento explicando sua arquitetura e escolhas de projeto.
* O código fonte.
* Um arquivo README que descreve ao avaliador a versão exata da linguagem de
  programação utilizada, bem como dependências da plataforma e detalhes para
  permitir a execução.

## Avaliação

A avaliação deste desafio é feita em duas etapas. Na primeira o avaliador irá
rodar o código e se certificar que funciona de acordo com os requisitos. Então
será feita uma análise do projeto e implementação do código. Nessa etapa a
arquitetura é de suma importância.

Além da solução em código será realizada uma avaliação oral com aqueles que
tiverem sucesso. Esse exame avaliará seu entendimento da solução e o fará buscar
justificativas para suas decisões de arquitetura e projeto da solução. Para cada decisão
de projeto você será avaliado pela consistência e clareza da sua abordagem, ao
invés de por qualquer solução específica. As decisões de projeto devem ser
brevemente, porém claramente, descritas em seus comentários.

## O que fazer se você possuir alguma dúvida?

Este documento deixa diversos problemas não especificados e abertos de forma
proposital. Sua habilidade em buscar resolver o problema apesar das dificuldades
e imperfeições das especificações faz parte da avaliação.

Você deve considerar as opções disponíveis e tomar decisões sobre como resolver
o problema. O processo de tomada de decisão sobre problemas deixados em aberto
neste documento é crucial para sua avaliação. Certifique-se de fazer anotações
das opções consideradas e da sua motivação por trás de cada decisão tomada,
enviando-as juntamente com a sua submissão. Sua principal avaliação não será
relacionada a cada decisão especifica que você tomou, mas de acordo com a
consistência do seu processo decisório.
