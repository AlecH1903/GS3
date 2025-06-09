<?php
session_start();           
session_unset();           
session_destroy();         // pega e destrou a sessão


header("Location: /verda volt/verdavolt.php");
exit();


?>