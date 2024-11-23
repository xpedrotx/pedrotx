<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['e-mail']);
$celular = addcslashes($_POST['celular'])

$para = "lisboapedro70@gmail.com";
$assunto = "Contato - PEDROTXDEV";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular;

$cabeca = "From: canalstockplayer@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o e-mail!");
}

?>