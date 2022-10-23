<?php
    namespace SRC;
    include 'funcoes.php';

    $funcoes = new Funcoes();

    //Função SeculoAno
    print $funcoes->SeculoAno(1905);
    print "\n";
    print $funcoes->SeculoAno(1700);
    print "\n";
    //Exception - Ano menor que 1
    //print $funcoes->SeculoAno(0);
    //print "\n";
    

    //Função PrimoAnterior
    print $funcoes->PrimoAnterior(10);
    print "\n";
    print $funcoes->PrimoAnterior(29);
    print "\n";
    //Exception - Número menor que 1
    //print $funcoes->PrimoAnterior(0);
    //print "\n";
    

    //Função SegundoMaior
    $arr = array (
        array(25,22,18),
        array(10,15,13),
        array(24,5,2),
        array(80,17,15)
      );
    print $funcoes->SegundoMaior($arr);
    print "\n"; 

    //Função SegundoMaior
    $arr = [1, 3, 2, 1]; //false
    $arr1 = [1, 3, 2];  //true
    $arr2 = [1, 2, 1, 2];  //false
    $arr3 = [3, 6, 5, 8, 10, 20, 15]; //false
    $arr4 = [1, 1, 2, 3, 4, 4]; //false
    $arr5 = [1, 4, 10, 4, 2]; //false
    $arr6 = [10, 1, 2, 3, 4, 5]; //true
    $arr7 = [1, 1, 1, 2, 3]; //false
    $arr8 = [0, -2, 5, 6]; //true
    $arr9 = [1, 2, 3, 4, 5, 3, 5, 6]; //false
    $arr10 = [40, 50, 60, 10, 20, 30]; //false
    $arr11 = [1, 1]; //true
    $arr12 = [1, 2, 5, 3, 5]; //true
    $arr13 = [1, 2, 5, 5, 5]; //false
    $arr14 = [10, 1, 2, 3, 4, 5, 6, 1]; //false
    $arr15 = [1, 2, 3, 4, 3, 6]; //true
    $arr16 = [1, 2, 3, 4, 99, 5, 6]; //true
    $arr17 = [123, -17, -5, 1, 2, 3, 12, 43, 45]; //true
    $arr18 = [3, 5, 67, 98, 3]; //true

    print "1\n";
    var_dump($funcoes->SequenciaCrescente($arr));
    print "2\n";
    var_dump($funcoes->SequenciaCrescente($arr1));
    print "3\n";
    var_dump($funcoes->SequenciaCrescente($arr2));
    print "4\n";
    var_dump($funcoes->SequenciaCrescente($arr3));
    print "5\n";
    var_dump($funcoes->SequenciaCrescente($arr4));
    print "6\n";
    var_dump($funcoes->SequenciaCrescente($arr5));
    print "7\n";
    var_dump($funcoes->SequenciaCrescente($arr6));
    print "8\n";
    var_dump($funcoes->SequenciaCrescente($arr7));
    print "9\n";
    var_dump($funcoes->SequenciaCrescente($arr8));
    print "10\n";
    var_dump($funcoes->SequenciaCrescente($arr9));
    print "11\n";
    var_dump($funcoes->SequenciaCrescente($arr10));
    print "12\n";
    var_dump($funcoes->SequenciaCrescente($arr11));
    print "13\n";
    var_dump($funcoes->SequenciaCrescente($arr12));
    print "14\n";
    var_dump($funcoes->SequenciaCrescente($arr13));
    print "15\n";
    var_dump($funcoes->SequenciaCrescente($arr14));
    print "16\n";
    var_dump($funcoes->SequenciaCrescente($arr15));
    print "17\n";
    var_dump($funcoes->SequenciaCrescente($arr16));
    print "18\n";
    var_dump($funcoes->SequenciaCrescente($arr17));
    print "19\n";
    var_dump($funcoes->SequenciaCrescente($arr18));
?>