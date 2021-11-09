<?php
#Diretórios Raizes
#Variavel de alteração de pasta interna
$PastaInterna="";

#CONSTANTE CAMINHO ABSOLUTO HTTP
define('DIRPAGE' ,"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

#Condição para colocar barra caso o servidor não entregue, para que não haja erro na requisição
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == "/"){
    #Definição do caminho fisico para buscar arquivo
    define('DIRREQ' ,"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    #Definição do contrabarra no caminho fisico
    define('DIRREQ' ,"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios especificos

#Diretório de Administração
define('DIRADM' ,DIRPAGE."public/admin/");

#Definição diretório de audio
define('DIRAUDIO' ,DIRPAGE."public/audio/");

#Definição diretório de css
define('DIRCSS' ,DIRPAGE."public/css/");

#Definição diretório de design
define('DIRDESIGN' ,DIRPAGE."public/design/");

#Definição diretório de fontes
define('DIRFONTES' ,DIRPAGE."public/fontes/");

#Definição diretorio de imagem
define('DIRIMG' ,DIRPAGE."public/images/");

#Definição diretório de JavaScript
define('DIRJS' ,DIRPAGE."public/js/");

#Definição diretório de video
define('DIRVIDEO' ,DIRPAGE."public/video/");

#ACESSO AO BANCO DE DADOS

define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");



