<html>
<body>
<p style="font-size: 1.8em; font-wieght: bold">
Your session has been distory
</p>
<?php
session_start();
session_destroy();
?>
<br>
<a href="index.php">Restart again</a>
</body>
</html>