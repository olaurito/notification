<?php

require __DIR__. '/Lib_ext/autoload.php';

// pasta vendor\biblioteca\metodo

use Notification\Email;



$novoEmail = new Email;
$novoEmail ->sendMail("Assunto de teste", "<p>Esse é um email de <b>teste</b></p>", "linkinneto.bsi@gmail.com", "Olaurito Neto", "ndigital.mkt@gmail.com", "olaurito");

var_dump($novoEmail);