<?php
function generate_jwt()
{
	$header = str_replace('=', '', strtr(base64_encode(
		json_encode(array(
			"alg" => "HS256"
		)))
	, '+/', '-_'));
	
	$body = str_replace('=', '', strtr(base64_encode(
		json_encode(array(
			"sub" => "user", 
			"canSearch" => "no", 
			"iat" => time(), 
			"exp" => time()+3600
		)))
	, '+/', '-_'));
	
	$signature = str_replace('=', '', strtr(base64_encode(hash_hmac("sha256", $header . "." . $body, "livestrong",1)), '+/', '-_'));
	
	return $header . "." . $body . "." . $signature;	
}

function verify_jwt($jwt)
{
	$jwt = @explode(".", $jwt);
	
	if(count($jwt) != 3)
		return false;
	if(json_decode(base64_decode($jwt[1]),1)['canSearch'] != "yes")
		return false;
	if(json_decode(base64_decode($jwt[1]),1)['iat'] > time())
		return false;
	if(json_decode(base64_decode($jwt[1]),1)['exp'] > time()+3600)
		return false;
	
	if(str_replace('=', '', strtr(base64_encode(hash_hmac("sha256", $jwt[0] . "." . $jwt[1], "livestrong",1)), '+/', '-_')) != $jwt[2])
		return false;
	
	return true;
}
?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<title>Motorul de cautare pentru vulnerabilitati</title>
  </head>
  <body>
    <div class="s013">
      <form method="post">
        <fieldset>
          <legend>GASESTE RAPID VULNERABILITATEA TA<br /><small><?php if(verify_jwt($_POST['token']) && $_POST['search'] == "flag"){ echo "RST{".hash("sha256","D0NTU$3DICTIONARYP@SSW0RDS")."}"; }elseif(!empty($_POST)){echo "Nu esti autorizat sa cauti.";} ?></small></legend>
        </fieldset>
        <div class="inner-form">
          <div class="left">
            <div class="input-wrap first">
              <div class="input-field first">
                <label>CE</label>
                <input type="text" placeholder="ex: xss, sql, rce, flag, etc." name="search" />
              </div>
            </div>
			<input type="hidden" name="token" value="<?php echo generate_jwt(); ?>">
          <button class="btn-search" type="submit">CAUTA</button>
        </div>
      </form>
    </div>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
