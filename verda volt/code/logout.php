<?php
session_start();           
session_unset();           // Limpa todas as variáveis de sessão
session_destroy();         // Destroi a sessão atual


header("Location: /verda volt/verdavolt.php");
exit();


?>