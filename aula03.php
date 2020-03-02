<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <style media="screen">
  /* Formata o body */
  body{
    /* Definir uma imagem ou cor de fundo para o site todo */
    /* background-color: #ff0000; */
    background-image: url('https://media.istockphoto.com/vectors/doodle-children-drawing-background-seamless-pattern-for-cute-little-vector-id667465388');
    /* Como é uma imagem, é possível definir qual tamanho ela vai ter.
    Automaticamente, ela vai ser repetida no eito X e Y caso não
    tenha o tamanho (altura x largura) total do site. */
    background-size: 200px;
    /* Deixa a imagem de fundo fixa; */
    background-attachment: fixed;
  }
  /* Formatar todo h2 que está dentro de alguma tag
  que possui a classe "noticias" */
  .noticias h2 {
    /* color muda a cor da fonte de um elemento */
    color: #006600;
    background-color: #DFDFDF;
    font-size: 20px;
  }

  /* Toda imagem dentro de alguma tag da classe "noticias" */
  .noticias img{
    /* Largura da imagem */
    width: 300px;
    /* Altura da imagem */
    /* height: 300px; */
    /* Geralmente, define-se apenas a altura ou a largura para que
    a outra medida seja definida automaticamente/proporcionalmente
    conforme o tamanho original da imagem */
  }

  /* Todo link que está dentro de algum parágrafo que está, por sua vez,
  dentro de alguma tag da classe "notícias". */
  .noticias p a{
    color: #008000;
  }
  </style>

  <h2>Portal de Notícias IFPR</h2>

  <div class="noticias">
    <h2>Declaração do IR começa segunda</h2>
    <p>Começa nesta segunda-feira (2), o período para a <a href="https://www1.folha.uol.com.br/mercado/2020/02/folha-lanca-servico-tira-duvidas-para-declaracao-do-ir-2020.shtml">entrega da declaração do IRPF 2020</a>, do ano-calendário 2019 (Imposto de Renda da Pessoa Física referente ao ano passado).O prazo se estende até 30 de abril, e a multa para o contribuinte que não fizer a declaração ou entregá-la fora do prazo será de, no mínimo, R$ 165,74. O valor limite para a cobrança da penalidade é de 20% do imposto devido.</p>
    <p>As declarações que forem enviadas no início do prazo e não tiverem erros ou inconsistências poderão receber as restituições, caso devidas, mais cedo. Idosos, portadores de doença grave e deficientes físicos ou mentais têm prioridade no recebimento.</p>
    <p>São obrigados a declarar o Imposto de Renda todos aqueles que, em 2019, tiveram <a href="https://www1.folha.uol.com.br/mercado/2020/02/em-12-estados-renda-media-per-capita-e-menor-que-salario-minimo.shtml">renda tributável </a>superior a R$ 28.559,70 ou renda isenta não tributada ou tributada na fonte acima de R$ 40 mil.</p>
    <img src="https://f.i.uol.com.br/fotografia/2020/03/01/15831075875e5c4e03b88cb_1583107587_3x2_md.jpg" alt="">
    <h6>
      Escrito em XX de xxx de xx por
      Fulano de Tal.
    </h6>
    <a href="https://www1.folha.uol.com.br/mercado/2020/03/declaracao-de-imposto-de-renda-comeca-nesta-segunda.shtml">Fonte: Folha de SP</a>
  </div>

  <div class="noticias">
    <h2>Notícia 2</h2>
    - uma tabela e 2 parágrafos
  </div>

  <div class="noticias">
    <h2>Notícia 3</h2>
    - uma imagem e 2 parágrafos
  </div>

</body>
</html>
