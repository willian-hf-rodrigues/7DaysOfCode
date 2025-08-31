<?php

function crud_create($user)
{
    try {
        $filename = DATA_LOCATION;
        $content = file_get_contents($filename);
        $data = json_decode($content, true);
        $data[] = $user;
        file_put_contents($filename, json_encode($data));
    } catch (Exception $e) {
        error_log("Error creating user: " . $e->getMessage());
        return false;
    }

    return true;
}
