<?php
$var = "d_var"; //была создана переменная $var и ей присвоено значение "d_var"
$$var = "hello"; //была создана переменная $d_var и ей присвоено значение "hello" (то же, что и $d_var = "hello")
echo $$var; // выводит значение переменной $d_var  - строку "hello"
$$var = "goodbye"; // присваивает переменной $d_var новое значение "goodbye"
echo $$var; // выводит значение переменной $d_var - строку "goodbye"
for ($i = 0; $i < 10; $i++) {
    ${"x" . $i} = 10;
    echo ${"x" . $i};
}
