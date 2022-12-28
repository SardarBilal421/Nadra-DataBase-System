<?php

   session_start();
    if (isset($_SESSION['user_id'])) {
        # code...
        session_destroy();
    }
    header(
        'Location: ./Index.php'
    );


?>