<?php
session_start();
session_destroy();
header("Location: login.php?return=Você saiu do sistema.");
exit();
