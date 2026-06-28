<?php

if (!function_exists('sweetAlert')) {
    function sweetAlert()
    {
        $session = session();
        if ($session->getFlashdata('alert')) {
            $alert = $session->getFlashdata('alert');
            echo "<script>
                Swal.fire({
                    icon: '{$alert['icon']}',
                    title: '{$alert['title']}',
                    text: '{$alert['text']}',
                });
            </script>";
        }
    }
}