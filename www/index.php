<?php
header('Content-Type: text/html; charset=UTF-8');

require_once( 'config.php' );
$request = substr( $_SERVER['REQUEST_URI'], 1 );

if( $request == '' ) {
	include 'home.php';
	exit;
}

// filter_var allows http://anonifous.com/javascript://%0A%0Dalert%28%27a%27%29 - so ensuring http/s protocol
if( !preg_match( '#^https?://#', $request ) ) {
	include 'badrequest.php';
	exit;
}

if( filter_var($request, FILTER_VALIDATE_URL) === false ) {
	include 'badrequest.php';
	exit;
}

$referrer_hash = md5( $seed . $_SERVER['HTTP_REFERER'] );
$delay = 2;

?><html>
<head>
<title>Redirecting you to <?php echo htmlentities( urldecode($request), ENT_QUOTES, 'UTF-8' ) ?></title>
<link rel="stylesheet" href="/style.css" type="text/css" />
<noscript>
<meta http-equiv="refresh" content="<?php echo $delay ?>; URL=<?php echo htmlentities($request, ENT_QUOTES, 'UTF-8') ?>">
</noscript>
<script language="JavaScript"><!--
var sTargetURL = "<?php echo htmlentities($request, ENT_QUOTES, 'UTF-8') ?>";
function doRedirect() {
    <?php if( $delay  == 0 ): ?>
	window.location.replace( sTargetURL );
    <?php else: ?>
        setTimeout( "window.location.href = sTargetURL", <?php echo $delay ?>000 );
    <?php endif ?>
}
//-->
</script>
<script language="JavaScript1.1"><!--
function doRedirect() {
    <?php if( $delay == 0 ): ?>
        window.location.replace( sTargetURL );
    <?php else: ?>
        setTimeout( "window.location.replace( sTargetURL )", <?php echo $delay ?>000 );
    <?php endif ?>
}
//-->
</script>
</head>
<body onload="doRedirect()">
<p>To protect your privacy, you are being redirected to <a href="<?php echo htmlentities($request, ENT_QUOTES, 'UTF-8') ?>"><?php echo htmlentities( urldecode($request), ENT_QUOTES, 'UTF-8' ) ?></a>. This redirection page means the destination site won't know where you came from.</p>
<p>Tell us if you believe the page you came from is <a href="/abuse.php?hash=<?php echo $referrer_hash?>&amp;referrer=<?php echo urlencode( $_SERVER['HTTP_REFERER'] ) ?>">using this service maliciously</a>, please click here.</p>
</body>
</html>
