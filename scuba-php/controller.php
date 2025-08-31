<?php

function do_register()
{
    $data = $_POST['person'] ?? [];

    if (!empty($data)) {
        unset($_POST['person']['password-confirm']);
        $result = crud_create($data);
        if ($result) {
            header("Location: index.php?page=login");
        }
    } else {
        $page = ($page ?? 'register');
        render_view($page);
    }
}

function do_login()
{
    $page = ($page ?? 'login');
    render_view($page);
}

function do_not_found()
{
    $page = 'not_found';
    http_response_code(404);
    render_view($page);
}

?>