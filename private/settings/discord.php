<?php
session_start();
include("config.php");
include("global.php");
$user_ip = getUserIP();
if( checklogin() == true ) {
	//If already logged in
	header("Location: #");
	die();

}

define('OAUTH2_CLIENT_ID', '');
define('OAUTH2_CLIENT_SECRET', '');
define('OAUTH2_URI', '');

$authorizeURL = 'https://discordapp.com/api/oauth2/authorize';
$tokenURL = 'https://discordapp.com/api/oauth2/token';
$apiURLBase = 'https://discordapp.com/api/users/@me';

// Start the login process by sending the user to Discord's authorization page
if(get('action') == 'login') {
  	$params = array(
		'client_id' => OAUTH2_CLIENT_ID,
		'redirect_uri' => OAUTH2_URI,
		'response_type' => 'code',
		'scope' => 'identify guilds guilds.join email'
 	);

  	// Redirect the user to Discord's authorization page
	header('Location: https://discordapp.com/api/oauth2/authorize' . '?' . http_build_query($params));
	die();
}

// When Discord redirects the user back here, there will be a "code" and "state" parameter in the query string
if(get('code')) {
	// Exchange the auth code for a token
	$token = apiRequest($tokenURL, array(
		"grant_type" => "authorization_code",
		'client_id' => OAUTH2_CLIENT_ID,
		'client_secret' => OAUTH2_CLIENT_SECRET,
		'redirect_uri' => OAUTH2_URI,
		'code' => get('code')
	));
	$logout_token = $token->access_token;
	$_SESSION['access_token'] = $token->access_token;
	header('Location: ' . $_SERVER['PHP_SELF']);
	die();
}

if(session('access_token')) {
  	$user = apiRequest($apiURLBase);
	$checkUserInDb = $conn->query("SELECT * FROM users WHERE discord_id='" . mysqli_real_escape_string($conn, $user->id) . "'");
	if( $checkUserInDb->num_rows == 0 ) {	
		// check if user uses VPN/proxy
		if( isProxy($user_ip) == true ) {
			die("Possible fraud attempt, please disable any VPN or proxy services to continue.");
		}

		/* check if user have another account on same IP - and use cookie to detect multi-accounts
		$CheckLastlogins = $conn->query("SELECT * FROM users WHERE lastlogin_ip='" . mysqli_real_escape_string($conn, $user_ip) . "'")->num_rows;
		$CheckRegisters = $conn->query("SELECT * FROM users WHERE register_ip='" . mysqli_real_escape_string($conn, $user_ip) . "'")->num_rows;
		if( isset($_COOKIE['user_info']) ) {
			$CookieDetected = true;
		} else {
			$CookieDetected = false;
		}
		if( $CheckLastlogins >= 1 || $CheckRegisters >= 1 || $CookieDetected == true ) {
			die("You already have another account. Multi-accounts are disallowed!");
		}
		*/

		// let the user join the tribyte discord server (if not already joined) and add the role to him/her (if not already added)
		JoinGuild($user->id, $discord['autojoin_guildid'], $discord['autojoin_role'], $discord['bot_token']);
		AddRoleToGuildMember($user->id, $discord['autojoin_guildid'], $discord['autojoin_role'], $discord['bot_token']);

		//add user in database
		$conn->query("INSERT INTO users (discord_id, level, plan_expiry, register_ip, lastlogin_ip) VALUES ('" . mysqli_real_escape_string($conn, $user->id) . "', 0, 0, '" . mysqli_real_escape_string($conn, $user_ip) . "', '" . mysqli_real_escape_string($conn, $user_ip) . "')");

		setcookie(
		  "user_info",
		  base64_encode(base64_encode($user->id)),
		  time() + (10 * 365 * 24 * 60 * 60)
		);

	} else {

		// let the user join the tribyte discord server (if not already joined) and add the role to him/her (if not already added)
		JoinGuild($user->id, $discord['autojoin_guildid'], $discord['autojoin_role'], $discord['bot_token']);
		AddRoleToGuildMember($user->id, $discord['autojoin_guildid'], $discord['autojoin_role'], $discord['bot_token']);

		$conn->query("UPDATE users SET lastlogin_ip='" . mysqli_real_escape_string($conn, $user_ip) . "' WHERE discord_id='" . mysqli_real_escape_string($conn, $user->id) . "'");
		if( !isset($_COOKIE['user_info']) ) {
			setcookie(
			  "user_info",
			  base64_encode(base64_encode($user->id)),
			  time() + (10 * 365 * 24 * 60 * 60)
			);
		}
	}

	$_SESSION['discord_user'] = $user;
	$_SESSION['isLoggedIn'] = true;
	header("Location: /");
	die();

} else {

	header("Location: discord.php?action=login");
	die();
}

function apiRequest($url, $post=FALSE, $headers=array()) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	if($post)
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	$headers[] = 'Accept: application/json';
	if(session('access_token'))
	$headers[] = 'Authorization: Bearer ' . session('access_token');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($ch);
	return json_decode($response);
	curl_close($ch);
}

function JoinGuild($user_id, $guild_id, $role_id, $bot_token) {
	$ch = curl_init("https://discordapp.com/api/guilds/" . $guild_id . "/members/" . $user_id);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	$headers[] = 'Accept: application/json';
	$headers[] = 'Content-Type: application/json';
	if(session('access_token')) {
		$headers[] = 'Authorization: Bot ' . $bot_token;
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
			"access_token" => session('access_token'),
			"roles" => array($role_id)
		)));
	}
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($ch);
	return json_decode($response);
	curl_close($ch);
}

function AddRoleToGuildMember($user_id, $guild_id, $role_id, $bot_token) {
	$ch = curl_init("https://discordapp.com/api/guilds/" . $guild_id . "/members/" . $user_id . "/roles/" . $role_id);
	curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	$headers[] = 'Accept: application/json';
	$headers[] = 'Content-Type: application/json';
	if(session('access_token')) {
	$headers[] = 'Authorization: Bot ' . $bot_token;
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
		"access_token" => session('access_token')
	)));
	}
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($ch);
	return json_decode($response);
	curl_close($ch);

}



function get($key, $default=NULL) {
  	return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function session($key, $default=NULL) {
	return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}