<?php

# Define os erros
$Msg[0] = "Erro na conexao com o banco de dados";
$Msg[1] = "Erro na selecao do banco de dados";

# Abre conexao com banco de dados MySql
$ConexaoMysql = @mysqli_connect("127.0.0.1","root","") or die ($Msg[0]);
@mysqli_select_db($ConexaoMysql,"appunisaude") or die ($Msg[1]);

?>