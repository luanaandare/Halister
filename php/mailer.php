<?php
$args = json_decode(file_get_contents("php://input"));

// The message
$message = wordwrap(
	ucfirst($args->name . " " . $args->sname . "/" . $args->enterprise)
	. "\n" . strtolower($args->mail)
	 . "\n\n" . $args->message
	 , 70
);

// Send
mail('contato@halister.com.br', 'Mensagem deixada no site - ' . ucfirst($args->name . " " . $args->sname . "/" . $args->enterprise), $message);

echo 1;