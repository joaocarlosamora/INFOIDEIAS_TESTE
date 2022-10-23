<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100,
     o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        if ($ano < 1) {
            throw new \Exception('O ano utilizado é inválido. Use um valor inteiro acima de zero.');
        }
        $sec = $ano / 100;
        $secRest = $ano % 100;
        
        if ($secRest > 0) {
            $sec++;
        }
        return $sec;
    }

	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        if($numero < 1) {
            throw new \Exception('O número utilizado é inválido. Use um valor inteiro acima de zero.');
        }
        for ($i = $numero - 1; $i > 0; $i--) {
            if (self::verificaPrimo($i)) {
                return $i;
            }
        }
    }
    public function verificaPrimo(int $num): bool {
        $cont = 0;
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $cont++;
            }
        }
        if ($cont == 2) {
            return true;
        }
        return false;
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $arr = self::transformaEmUnicoArray($arr);
        $maior = 0;
        $segMaior = 0;

        for($i = 0; $i < sizeof($arr); $i++){
            if ($arr[$i] > $maior) {
                $segMaior = $maior;
                $maior = $arr[$i];
            }
        }

        return $segMaior;
    }
	
    public function transformaEmUnicoArray(array $arr1): array {
        $arr2 = array();

        for ($i = 0; $i < sizeof($arr1); $i++) {
            for ($j = 0; $j < sizeof($arr1[$i]); $j++) {
                array_push($arr2, $arr1[$i][$j]);
            }
        }

        return $arr2;
    }


    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr): bool {
        $p = 0;
        $l = 0;
        $k = 1;
        $arr1 = $arr;

        while($l < sizeof($arr1) - 1){
            while($k <= sizeof($arr1) - 1) {
                if ( $arr1[$l] == $arr1[$k]) {
                    if ($arr1[$l] > $arr1[$l+1]) {
                        unset($arr1[$l]);
                    }else{
                        unset($arr1[$k]);
                    }
                    $arr1 = array_values($arr1);
                    $p++;
                    $l=0;
                    $k=1;
                }else{
                    $k++;
                }
            }
            $l++;
            $k = $l +1;
        }

        if($p > 1){
            return false;
        } else {
            for($i = 0;$i < sizeof($arr1) - 1; $i++) {
                if($arr1[$i] > $arr1[$i+1]){
                    unset($arr1[$i]);
                    $arr1 = array_values($arr1);
                    $p++;
                    $i=0;
                }
            }

            if($p <= 1){
                return true;                           
            } else{
                return false;
            }
        }
    }
}