<?php
/*header('Location: /start.htm');

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  $password = getenv('password');
});

$app->run();
*/
?>
<!DOCTYPE html>
<html>
<head>
	<style>
	* {
		box-sizing: border-box;
	}
		html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, img, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			b, u, i, center,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, embed, 
			figure, figcaption, footer, header, hgroup, 
			menu, nav, output, ruby, section, summary,
			time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
			}
			h1 {
				font-size: 130%;
				font-weight: bold;
				padding: 15px 0;
			}

			p {
				font-size: 100%;
			}

			label, input, p {
				float: left;
				clear: both;
				width:100%;
			}

			label {
				padding: 10px 0;
			}

			input {
				border: 1px solid #999;
				padding:7px 10px;
				font-size: 100%;
				margin-bottom: 20px
			}

			div.content {
				width: 100%;
				max-width: 400px;
				margin: 20px auto;
				display: block;
			}

			div.content > div {
				width: 100%;
				float: left;
				border: 1px solid #999;
				padding: 20px;
			}

			button {
				background-color: #1ea321;
				padding: 10px;
				font-size: 100%;	
				border: 0;
				border-radius: 3px;
				color: #fff;
				margin:10px auto;
				display: block;
			}
	}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
	font-family: arial;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
	</style>

</head>
<body>
<?php 
echo'ddddd';
$password = getenv('password');
echo $password;
if (!empty($_POST)) {
	$psw = $_GET['psw'];
	if (!empty($psw)) {
		if($psw = $password) {
			header('location: /start.php');
		}
		else {
			echo '<div class="content"><div><p style="text-align:center; color:red;">Incorrect password.</p><p style="text-align:center;"><a href="/">Try again</a></p></div></div>';
		}
	}
	else {
			echo '<div class="content"><div><p style="text-align:center; color:red;">Incorrect password.</p><p style="text-align:center;"><a href="/">Try again</a></p></div></div>';
		}
}
	else {
		echo '

	<div class="content">
	<div>
	<h1>Please login</h1>
	<p>Enter your password to access the prototype.</p>
	<form method="post" action="'.($_SERVER['PHP_SELF']).'">
	<label for="psw">Password:</label>
	<input type="password" id="psw" name="psw">
	<button type="submit" value="Continue">Continue</button>
	</form>
	</div>
	</div>';
	}

?>
</body>
</html>
