<?php
session_start();

require_once "VISTA/Web.php" ;


    web::header();
    web::about();
    web::footer();

    web::web();

?>
