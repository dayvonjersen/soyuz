<?php

// PDO socket
// Or using socket would be even faster then 127.0.0.1 :3
define('POMF_DB_CONN', 'mysql:host=127.0.0.1;dbname=pomf');
// MySQL user and password
define('POMF_DB_USER', 'root');
define('POMF_DB_PASS', '');

// Root location of files
define('POMF_FILES_ROOT', '/srv/pomf/tmp/');
// Maximum number of iterations while generating a new name
define('POMF_FILES_RETRIES', 15);
// URL to prepend to output (include trailing slash)
define('POMF_URL', 'http://192.168.1.3/tmp/');

$doubledots = array_map('strrev', array(
	'tar.gz',
	'tar.bz',
	'tar.bz2',
	'tar.xz',
	'user.js'
));

?>
