<?php
include "./API/Messages.php";

echo "Hello World";

$language = "LT";

print_r(getStringList("Index.Main text.".$language));

?>