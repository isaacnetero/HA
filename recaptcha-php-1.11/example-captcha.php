<html>
  <body>
    <form action="" method="post">
<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lf62OgSAAAAAKXFFAgQMe7mHYNjGUvFj15Sknjr";
$privatekey = "6Lf62OgSAAAAAOYPTa1HtzlYNTEc90J-slBnTacP";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        echo("POST: " . $_POST["recaptcha_response_field"]);
		$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
        if ($resp->is_valid) {
				header("Location:../teste.php");
        } else {
				die("Fail!" . $resp->error);				
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
