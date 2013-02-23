<?php

/********************************************
    Document   : Index
    Created on : February 23, 2013, 9:34 AM
    Author     : Tauseef Jamadar
    Description:
        Sample page using the template engine.
*********************************************/

include 'template.php';

$template = new template();

$template->assign('username', 'Tauseef');
$template->assign('username', 'Tauseef');
$template->assign('firstname', 'Tauseef');
$template->assign('lastname', 'Jamadar');
$template->assign('address', '717 Hazel Street');
$template->assign('phone', '650-576-5403');

$template->renderTemplate('template');





?>
