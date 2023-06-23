<?php
/** Lógica: 1- percorrer o nr de linhas em um loop
            2- criar um array que vai armazenar todos os valores da linha
            3- armazenar os espacos em branco necessários, que vao variar dependendo do número da linha,
                    cada linha tem 2 números a mais que a anterior entao se o número de linhas for 8,
                    a 1 linha deve ter 7 espacos. Cada 2 &nbsp; = 1 espaco (visualizar no devTools)
 *          4- Iniciar uma variavel com valor 0 em um loop e incrementar seu valor até o valor da variavel
 *          ser < que o valor da linha correspondente.
 *          5- o mesmo que o anterior porém agora é necessario subtrair a variavel anteriormente criada até
 *          o valor ser > 1.
 *          6- transformar o array em string, substituindo as virgulas por espaco vazio, para correta exibição.
 *          7- ao fim de cada loop de nr de linha, adicionar uma quebra de linha.
 *
 **
 */


$nrLinhas = filter_input(INPUT_POST,'nr_linhas',FILTER_DEFAULT);


for($i = 1; $i <= $nrLinhas ; $i++){
    $arrLinhas = [];

    for($qtdEspacos = 0; $qtdEspacos < $nrLinhas - $i ; $qtdEspacos++){
        $arrLinhas[] = '&nbsp;&nbsp;';
    }
    for($k = 0 ; $k < $i ; $k++ ){
        $soma = $k + 1;
        $arrLinhas[] = $soma;
    }
    for($j = 1; $k > $j ; $k--){
        $sub = $k - 1;
        $arrLinhas[] = $sub;
    }

    echo str_replace(",","",implode(",",$arrLinhas)) . "<br>";
}

