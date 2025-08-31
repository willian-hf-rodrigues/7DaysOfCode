<?php

$page = ($_GET['page'] ?? 'login');

switch ($page) {
    case 'register':
        do_register();
        break;
    case 'login':
        do_login();
        break;
    case 'not_found':
        do_not_found();
        break;
    default:
        do_not_found();
}
