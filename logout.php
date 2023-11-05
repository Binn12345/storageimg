<?php

    if (isset($_POST['logout'])) {
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        header('Location: ..'); // Redirect to the login page (replace with the actual login page URL)
        exit();
    }