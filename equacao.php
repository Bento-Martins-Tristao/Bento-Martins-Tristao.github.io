<?php
$a = $_POST["A"];
$b = $_POST["B"];
$c = $_POST["C"];
if($a == 0)
{
    echo "Você não possui uma equação de segundo grau.";
}
if ($a != 0)
{
//readline so funciona em modo CLI, nao HTTP
//$b = readline("Valor B: ");
//$c = readline("Valor C: ");
$delta = ($b*$b) - (4*$a* $c);
$x1 = (-1*$b+sqrt($delta))/(2*$a);
$x2 = (-1*$b-sqrt($delta))/(2*$a);
$funcao;
    if($b == 0 && $c == 0);
    {
        $funcao = $a."x²";
    }
    if ($a != 1 && $b != 1);
    {
        if($b < 0 && $c < 0);
        {
            $funcao = $a."x²".$b."x".$c;
        }
        if ($b < 0 && $c ==  0);
        {
            $funcao = $a."x²".$b."x é: ".$x1.".\n";
        }
        if($b < 0 && $c > 0);
        {
            $funcao = $a."x²".$b."x+".$c;
        }
        if($b == 0 && $c < 0);
        {
            $funcao = $a."x²".$c;
        }
        if($b == 0 && $c > 0);
        {
            $funcao = $a."x²+".$c;
        }
        if($b > 0 && $c < 0);
        {
            $funcao = $a."x²+".$b."x".$c;
        }
        if($b > 0 && $c == 0);
        {
             $funcao = $a."x²+".$b."x";
         }
        if($b > 0 && $c > 0);
        {
            $funcao = $a."x²+".$b."x+".$c;
        }
    }
    if ($a != 1 && $b == 1);
    {
        if($b < 0 && $c < 0);
        {
            $funcao = $a."x²-x".$c;
        }
        if ($b < 0 && $c ==  0);
        {
            $funcao = $a."x²-x";
        }
        if($b < 0 && $c > 0);
        {
            $funcao = $a."x²-x+".$c;
        }
        if($b > 0 && $c < 0);
        {
             $funcao = $a."x²+x".$c;
        }
        if($b > 0 && $c == 0);
        {
            $funcao = $a."x²+x";
        }
        if($b > 0 && $c > 0);
        {
            $funcao = $a."x²+x+".$c;
        }
    }
    if ($a == 1 && $b != 1);
    {
        if($b < 0 && $c < 0);
        {
            $funcao="x²".$b."x".$c;
        }
        if ($b < 0 && $c ==  0);
        {
            $funcao="x²".$b."x é: ".$x1.".\n";
        }
        if($b < 0 && $c > 0);
        {
            $funcao="x²".$b."x+".$c;
        }
        if($b == 0 && $c < 0);
        {
            $funcao="x²".$c;
        }
        if($b == 0 && $c > 0);
        {
            $funcao="x²+".$c;
        }
        if($b > 0 && $c < 0);
        {
            $funcao="x²+".$b."x".$c;
        }
        if($b > 0 && $c == 0);
        {
            $funcao="x²+".$b."x é: ".$x1.".\n";
        }
        if($b > 0 && $c > 0);
        {
            $funcao="x²+".$b."x+".$c;
        }
    }
    if ($a == 1 && $b == 1);
    {
        if($b < 0 && $c < 0);
        {
            $funcao="x²-x".$c;
        }
        if ($b < 0 && $c ==  0);
        {
            $funcao="x²-x é: ".$x1.".\n";
        }
        if($b < 0 && $c > 0);
        {
            $funcao="x²-x+".$c;
        }
        if($b > 0 && $c < 0);
        {
            $funcao="x²+x".$c;
        }
        if($b > 0 && $c == 0);
        {
            $funcao="x²+x é: ".$x1.".\n";
        }
        if($b > 0 && $c > 0);
        {
            $funcao="x²+x+".$c;
        }
    }
}
echo("<a href=\"http://127.0.0.1:5501/equacao.html\">Voltar</a>");
?>