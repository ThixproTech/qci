<?php

/**
 * ============================================
 * THIXPRO ADMIN AUTH MIDDLEWARE
 * ============================================
 */

if (session_status() === PHP_SESSION_NONE) {

    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'domain'   => '',
        'secure'   => !empty($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    session_start();
}

/*
|--------------------------------------------------------------------------
| Security Headers
|--------------------------------------------------------------------------
*/

header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: camera=(), microphone=(), geolocation=()");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

/*
|--------------------------------------------------------------------------
| Check Login
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['admin_id'])) {

    header("Location: index.php");
    exit;

}

/*
|--------------------------------------------------------------------------
| Session Timeout (30 Minutes)
|--------------------------------------------------------------------------
*/

$timeout = 1800;

if (isset($_SESSION['last_activity'])) {

    if ((time() - $_SESSION['last_activity']) > $timeout) {

        $_SESSION = [];

        if (ini_get("session.use_cookies")) {

            $params = session_get_cookie_params();

            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );

        }

        session_destroy();

        header("Location: index.php?expired=1");
        exit;
    }
}

$_SESSION['last_activity'] = time();

/*
|--------------------------------------------------------------------------
| Session Hijacking Protection
|--------------------------------------------------------------------------
*/

$currentIP = $_SERVER['REMOTE_ADDR'] ?? '';

$currentAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (!isset($_SESSION['ip'])) {

    $_SESSION['ip'] = $currentIP;

}

if (!isset($_SESSION['agent'])) {

    $_SESSION['agent'] = $currentAgent;

}

if ($_SESSION['ip'] !== $currentIP ||
    $_SESSION['agent'] !== $currentAgent) {

    $_SESSION = [];

    session_destroy();

    header("Location: index.php?security=1");

    exit;
}

/*
|--------------------------------------------------------------------------
| Extra Validation
|--------------------------------------------------------------------------
*/

if (
    empty($_SESSION['admin_name']) ||
    empty($_SESSION['admin_email'])
) {

    session_destroy();

    header("Location: index.php");

    exit;
}