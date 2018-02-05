<?php
#IMPORTANDO ARQUIVOS PHP

# include - Importa e não emite erro caso o arquivo não exista
# include_once - Importa e não importa duas vezes o mesmo arquivo
# require - Importa e emite um erro caso o arquivo não exista
# require_once - Importa e não importa duas vezes o mesmo arquivo

include('importacao_file_aula.php'); // Importa o arquivo e não emite erro caso o arquivo não exita
include_once('importacao_file_aula.php'); // Caso já foi importado não importa de novo

require('importacao_file_aula.php'); // Importa o arquivo e emite um erro caso o arquivo não exista
require_once('importacao_file_aula.php'); // Caso já foi importado não importa de novo

echo $teste . "\n\n";
$teste = "New Value \n";

echo $teste . "\n";

require('importacao_file_aula.php'); // Importa o arquivo e reseta a variavel $teste

echo $teste . "\n";