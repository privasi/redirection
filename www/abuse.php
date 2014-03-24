<?php
header('Content-Type: text/html; charset=UTF-8');
require_once( 'config.php' );
$hash = md5( $seed . $_GET['referrer'] );
if( $hash != $_GET['hash'] ) {
	$request = $_SERVER['REQUEST_URI'];
	include 'badrequest.php';
	exit;
}
if( $_GET['referrer'] != '' && $_SERVER['HTTP_REFERER'] != '' ) {
	mail( $email, 'Abuse', "From: {$_GET['referrer']}\nTo: {$_SERVER['HTTP_REFERER']}" );
}
?><html>
<head>
<title>Redirection Anonymiser</title>
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>
<body>
<h1>Malicious Abuse of Services</h1>
<p>Thanks for letting us know. If available, the source and destination locations of the request you believe is questionable have been emailed to the site maintainer. Your personal information has not been included, stored, retained or logged.</p>
</body>
</html>
