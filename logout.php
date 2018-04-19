<?php

session_start();

unset($_SESSION["regn"]);

unset($_SESSION["uname"]);

header('Location: http://localhost/mnnitkart/index.html');

?>