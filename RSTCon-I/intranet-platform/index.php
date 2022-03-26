<?php 
session_start();
if(strlen($_SESSION['user']) > 0)
{
	header("Location: dashboard.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://global.oktacdn.com/okta-signin-widget/4.3.2/js/okta-sign-in.min.js" type="text/javascript"></script>
<link href="https://global.oktacdn.com/okta-signin-widget/4.3.2/css/okta-sign-in.min.css" type="text/css" rel="stylesheet"/>
<title>Platforma Intranet</title>

<link rel="stylesheet" href="css/style.default.css" type="text/css" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/modernizr.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/custom.js"></script>

<style type="text/css">
.okta-sign-in-header{
	display:none;
}
</style>

</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner" style="margin-top:-300px;">
        
<div id="widget-container"></div>

<script>
	var signIn = new OktaSignIn(
	{
	baseUrl: 'https://dev-451350.okta.com',
	clientId: '0oay3pobz6uUjSKju4x6',
	authParams: {
		issuer: 'https://dev-451350.okta.com/oauth2/default',
		responseType: 'token',
		display: 'page',
		responseMode: 'form_post',
		pkce: false
	},
	i18n:{
		en: {
			'signin': 'Conectare'
		}
	},
	redirectUri: 'https://web-1.rstcon.adminpanel.biz/login.php'
	});
  signIn.renderEl({
    el: '#widget-container'
  }, function success(res) {
    if (res.status === 'SUCCESS') {
      console.log('Do something with this sessionToken', res.session.token);
    } else {

    }
  });
</script>
        
    </div><!--loginpanelinner-->
</div><!--loginpanel-->
<style>
	.js-help{display:none;}
</style>
<div class="loginfooter">
    <p>Copyright &copy; 2020. Awesome Company. Toate drepturile rezervate.<br />Pentru a te conecta ca vizitator, foloseste guest:guest</p>
</div>

</body>
</html>
