<html>
<head>
<title>Redirection Anonymiser</title>
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>
<body>
<h1>Bad Request</h1>
<div class="error">
	<p>The request <span class="code"><?php echo htmlentities( urldecode($request), ENT_QUOTES, 'UTF-8' ) ?></span> is not valid.</p>
</div>
<p><a href="/">Go to the home page to see what this is about, and how to use it</a>.</p>
</body>
</html>
