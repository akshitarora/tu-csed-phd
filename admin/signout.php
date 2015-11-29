<?php
session_start();
session_unset();
echo "<script>window.location.href='/phd/'</script>";
session_destroy();

?>