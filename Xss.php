<?php
// submit.php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

echo "Nama: " . $name . "<br>";
echo "Email: " . $email;
?>
