<?php
// Save as check_smtp.php in your project root

echo "<h2>SMTP Configuration Check</h2>";
echo "<p>HOST: " . getenv('EMAIL_HOST') . "</p>";
echo "<p>USERNAME: " . getenv('EMAIL_USERNAME') . "</p>";
echo "<p>PORT: " . getenv('EMAIL_PORT') . "</p>";
echo "<p>ENCRYPTION: " . getenv('EMAIL_ENCRYPTION') . "</p>";
echo "<p>FROM ADDRESS: " . getenv('EMAIL_FROM_ADDRESS') . "</p>";