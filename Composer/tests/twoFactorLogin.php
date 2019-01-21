<?php

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__.'/../vendor/autoload.php';

/////// CONFIG ///////
$username = $argv[1];
$password = $argv[2];
$savePath = $argv[3];

$debug = false;
$truncatedDebug = false;
//////////////////////

// $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug, [
    'storage'    => 'file',
    'basefolder' => $savePath,
]);

try {
    $loginResponse = $ig->login($username, $password);
		$feed = $ig->business->getStatistics();
		echo '<br><br>STATS<br><br>';
		$feed->printJson();

    if ($loginResponse !== null && $loginResponse->isTwoFactorRequired()) {
        $twoFactorIdentifier = $loginResponse->getTwoFactorInfo()->getTwoFactorIdentifier();

        // The "STDIN" lets you paste the code via terminal for testing.
        // You should replace this line with the logic you want.
        // The verification code will be sent by Instagram via SMS.
        $verificationCode = trim(fgets(STDIN));
        $ig->finishTwoFactorLogin($username, $password, $twoFactorIdentifier, $verificationCode);
    }
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
}
