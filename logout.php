<?php
session_start();
ob_start();
session_destroy();
echo "Cikis Yaptiniz. Ana Sayfaya Y�nlendiriliyorsunuz";
header("Refresh: 2; url=index.html");
ob_end_flush();
?>