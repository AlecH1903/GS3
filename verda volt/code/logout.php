<?php
session_start();           
session_unset();           
session_destroy();         // pega e destrou a sessão


header("Location: /dashboard/verda volt/verdavolt.php");
exit();


?>