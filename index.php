<!doctype html>
<!--[if IE 8]>
<html dir="ltr" lang="en" class="ie8">
<![endif]-->
<!--[if IE 9]>
<html dir="ltr" lang="en" class="ie9">
<![endif]-->
<!--[if gt IE 9]>
<html dir="ltr" lang="en">
<![endif]-->
	<head>
		<title>Responsive Grid Layout</title>
		<meta charset="utf-8">
    	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    	<meta name="author" content="Alex Shearcroft" />
    	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
		<link href='Assets/Styles/styles.css' rel='stylesheet'/>
        <script src="Assets/Scripts/jquery.js"></script>
        <script src="Assets/Scripts/mobile-nav.js"></script>
        <script src="Assets/Scripts/modernizr.js"></script>
	</head>
	<body>
		<section class="grid">
			<nav class="navigation">
				<h1 class="navigation__title">Responsive Grid Layout</h1>
				<a class="js-nav-dropdown" href="#">Nav dropdown</a>
				<ul class="grid__layout grid__layout--one-half navigation__links">
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
				</ul>
			</nav>
			<div class="grid__layout"><p>Grid</p></div>
			<div class="grid__layout grid__layout--one-half"><p>one-half</p></div>
			<div class="grid__layout grid__layout--one-half"><p>one-half</p></div>
			<div class="grid__layout grid__layout--one-third"><p>one-third</p></div>
			<div class="grid__layout grid__layout--one-third"><p>one-third</p></div>
			<div class="grid__layout grid__layout--one-third"><p>one-third</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-third"><p>one-third</p></div>
			<div class="grid__layout grid__layout--two-thirds"><p>two-thirds</p></div>
			<div class="grid__layout grid__layout--one-half"><p>one-half</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--one-quarter"><p>one-quarter</p></div>
			<div class="grid__layout grid__layout--three-quarters"><p>three-quarters</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
			<div class="grid__layout grid__layout--one-sixth"><p>one-sixth</p></div>
		</section>
	</body>
</html>