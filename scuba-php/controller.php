<?php

function do_register($page)
{
    $page = ($_GET['page'] ?? 'register') . '.view';
    render_view($page);
}

function do_login($page)
{
    $page = ($_GET['page'] ?? 'login') . '.view';
    render_view($page);
}

function do_not_found($page)
{
    $page = 'not_found.view';
    render_view($page);
}

?>