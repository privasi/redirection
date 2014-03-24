<html>
<head>
	<title>Redirection Anonymiser by Privasi</title>
	<link rel="stylesheet" href="/style.css" type="text/css" />
</head>
<body>
	<div>
		<h1>Redirection Anonymiser by Privasi</h1>
	</div>
	<div class="updates">
		<p><a href="https://priva.si/twitter">Follow us on twitter for updates to services</a></p>
	</div>
	<div class="about">
		<h2>About</h2>
		<p>This service allows you to anonymise links to other sites. Normally, when you link to another site, clicking on that link causes the destination site to know where the user came from (unless disabled in the browser).</p>
		<p>By prepending any absolute URI with one of the following, the destination site will only see the user coming from anonifous.com or redirect.priva.si, and not your site.</p>
		<ul>
			<li>http://anonifous.com/</li>
			<li>http://redirect.priva.si/</li>
			<li>https://redirect.priva.si/</li>
		</ul>
		<p>For example, a link on http://example.com/ to <span class="code">https://redirect.priva.si/http://google.com/</span> will send people to Google, and Google will see them coming from redirect.priva.si, not example.com.</p>
	</div>
	<div class="purpose">
		<h2>Why is this useful?</h2>
		<p>Other sites might not be an issue, their privacy policies might be okay, they might be too small to worry about, but most sites use an analytics tool to analyse traffic. If they use one of the major tools, such as Google Analytics, then the analytics provider will be able to see where each user came from.</p>
		<p>Particularly in the case of Google, if the user coming to your site has a Google account and is logged in to it at the time, Google will know who they are, and be able to add the source site to their database of information about that user.</p>
		<p>In order to stop Google being able to track and tag these actions, which the user usually doesn't know would happen, regardless of whether they'd be okay with it, redirecting via a service like this removed that referrer information.</p>
	</div>
	<div class="differences">
		<h2>Aren't there services like this already?</h2>
		<p>Yes, there are, but I don't trust them. Mainly, because they all use analytics tools that track where the user come from. They provide anonymity from the destination site, but the large tracking companies still have your details, and in my view, that's pointless. Secondly, because they don't tell me how they use my information.</p>
		<h2>So, what does this site track?</h2>
		<p>Nothing.</p>
		<p>We don't have web server logging, we don't use sessions, we don't use third-party tools. Your request comes in, and we geneate a page that we send to your browser to redirect you to the requested destination. Simple.</p>
	</div>
	<div class="contact">
		<h2>Feedback</h2>
		<p>We'd love to hear form you if you find this service useful or have ideas on how to improve it. <a href="https://priva.si/twitter">Talk to us on twitter</a> or <a href="https://github.com/privasi/redirect/issues">add your thoughts to our issue tracker for this project</a>.</p>
	</div>
	<div class="github">
		<h2>Source Code</h2>
		<p>The source code for <a href="https://github.com/privasi/redirect">Privasi Redirect is available on GitHub</a>.</p>
	</div>
</body>
</html>
