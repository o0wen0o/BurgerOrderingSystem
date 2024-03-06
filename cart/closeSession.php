<?php
// Start the session
session_start();

// Unset all session variables except login
foreach ($_SESSION as $key => $value) {
    if ($key !== 'id' && $key !== 'email') {
        unset($_SESSION[$key]);
    }
}

// Echo a message to indicate that the session has been closed
echo "Session closed";

?>
