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
    - Se o estado do orçamento estiver em aprovação, aplicará 5% de desconto.
    - Se o orçamento for aprovado, aplicará mais 2% de desconto.

* Command
  * Regra de negócio:
    - Após o orçamento ser aprovado, é necessário gerar um pedido. Esse pedido é criado e persistido no banco de dados; só que também deve enviar um e-ail para o cliente informando que o pedido dele foi criado com sucesso e tamb´em deve gerar um log, registrando o pedido gerado.

* Observer
  * Regra de negócio:
    - No padrão Command, vimos que são realizadas as ações de persistencia no banco de dados, geração de log e envio de e-mail. Estas ações podem abstraídas em objetos que poderão ser adicionados ao comando para que quando o pedido for gerado, esses objetos executem estas ações. Dessa forma, deixamos a responsabilidade de execução das regras de negócio com suas respectivas ações e evitamos com que o código do comando cresca.

* Iterator
  * Regra de negócio:
    - listaremos todos os orçamentos (aprovados, reprovados, em aprovação e finalizados) mas também queremos que estes orçamentos possam ser filtrados de acordo com o estado atual. Com o padrão Iterator se torna possível fazer isso.

* Adapter
  * Regra de negócio:
    - Agora, queremos registrar o orçamento em uma API externa via requisição HTTP. Isso pode ser feito de várias formas, porém para que a aplicação possa ter flexibilidade para alterar o uso de uma API para a outra, o padrão Adapter se encaixa perfeitamente neste caso.
