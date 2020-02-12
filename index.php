<?php
include "./API/Messages.php";

echo "Hello World";

$language = "LT";

print_r(getString("Index.Main text.".$language));

?>