<?php
print_r($_COOKIE);
unset($_COOKIE["test"]);
echo $_COOKIE["test"];
