<?php

chdir (dirname(__FILE__) . "/inc");

require_once "HTTP/WebDAV/Server/Filesystem.php";
$server = new HTTP_WebDAV_Server_Filesystem();

$server->ServeRequest( dirname( get_real_path( $data_dir ) ) );

?>