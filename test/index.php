<?php

require __DIR__. '/../Lib_ext/autoload.php';

// pasta vendor\biblioteca\metodo

use Notification\Email;



$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");

var_dump($novoEmail);