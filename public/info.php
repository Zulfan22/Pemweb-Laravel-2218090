<?php
$conn = new mysqli("127.0.0.1", "root", "", "db_pengiriman");
echo "Versi server MySQL: ". $conn->server_version;
?>