<html>
<head>
    <title>Wirecard Payment Page Integration Demo</title>
</head>
<body>
<h1>Wirecard Payment Page Integration Demo - Standalone Creditcard and Alternative Payment Methods</h1>

<?php
require_once('../util/general-functions.php');

session_start();
redirect($_SESSION['payment-redirect-url']);
?>

<p>
    Your consumer will see this page only for a short time, if the redirection happens relatively slowly.<br>
    You can display a text like:
</p>

<p>
    Please wait, You'll be redirected to the payment page.
</p>

</body>
</html>
