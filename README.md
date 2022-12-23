# Projeto Orçamentos

Este repositório foi criado com o intuito de construir um sistema de geração de orçamentos de serviços de qualquer natureza afim de aprender na prática, os conceitos de Design Patterns usando PHP.

## Tecnologias

* PHP 8
* Docker

## Desing patterns aplicados

No momento, estou estudando os padrões comportamentais:

* Strategy
  * Regra de negócio que este padrão resolve:
    - Como em um orçamento pode ser aplicado impostos sobre ele, precisamos saber qual imposto será necessário aplicar. Para evitar o uso de muitos `if else` ou `switch case` percorrendo cada tipo de imposto, definiremos o imposto que será aplicado ao calcular o orçamento. O padrão Strategy resolve esse problema.

* Chain of Responsability
  * Regras de negócio:
    - Orçamentos que possuem mais de 5 ítens, aplique 10% de desconto sobre o valor total.
    - Orçamentos com o valor total maior do que 500 reais, aplique 5% de desconto.

* Template Method
  * Regra de negócio:
    - Existem certos impostos que possuem mais de uma porcentagem para ser aplicada ao orçamento de acordo com o valor total.
      - Imposto Cofins: Taxa máxima é de 7,6%, taxa mínima é de 3%.
      - Imposto Csll: Taxa máxima é de 15%, taxa mínima é de 9%.

* State
  * Regra de negócio:
    - Cada orçamento receberá descontos extras, porém só será aplicado dependendo de qual estado o orçamento está atualmente.
