<?php

require __DIR__. '/../Lib_ext/autoload.php';

// pasta vendor\biblioteca\metodo

use Notification\Email;



$novoEmail = new Email(2,'smtp.mailtrap.io', '0f7d6bd48c9e40','579d1ba0960c60', 'tls', 587, 'linkinneto.bsi@gmail.com', 'Equipe Olaurito');
$novoEmail ->sendMail("Assunto de teste", "<p>Esse é um email de <b>teste</b></p>", "linkinneto.bsi@gmail.com", "Olaurito Neto", "ndigital.mkt@gmail.com", "olaurito");

var_dump($novoEmail);