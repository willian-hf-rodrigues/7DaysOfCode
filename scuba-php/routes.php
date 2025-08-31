<?php

$page = ($_GET['page'] ?? 'login');

switch ($page) {
    case 'register':
        do_register($page);
        break;
    case 'login':
        do_login($page);
        break;
    case 'not_found':
        do_not_found($page);
        break;
    default:
        do_not_found($page);
}
