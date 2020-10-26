<?php

require "../vendor/ehime/hello-world/src/HelloWorld/SayHello.php";
use HelloWorld\SayHello;

$hello = new SayHello();
echo $hello->world();