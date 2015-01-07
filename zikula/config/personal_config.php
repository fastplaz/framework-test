<?php
// prepare if magic_quotes_gpc=on
// ref: lib/EventHandlers/SystemListeners.php[735]
//   ini_set( 'magic_quotes_gpc', 0 ); --> doesn't work
if ( in_array( strtolower( ini_get( 'magic_quotes_gpc' ) ), array( '1', 'on' ) ) ) {

	// cara #1
	//$_POST = array_map( 'stripslashes', $_POST );
	//$_GET = array_map( 'stripslashes', $_GET );
	//$_COOKIE = array_map( 'stripslashes', $_COOKIE );

	// cara #2
  $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
  while (list($key, $val) = each($process)) {
      foreach ($val as $k => $v) {
          unset($process[$key][$k]);
          if (is_array($v)) {
              $process[$key][stripslashes($k)] = $v;
              $process[] = &$process[$key][stripslashes($k)];
          } else {
              $process[$key][stripslashes($k)] = stripslashes($v);
          }
      }
  }
  unset($process);

	// cara #3, php 5.3+
	/*
		$_GET = json_decode(stripslashes(json_encode($_GET, JSON_HEX_APOS)), true);
		$_POST = json_decode(stripslashes(json_encode($_POST, JSON_HEX_APOS)), true);
		$_COOKIE = json_decode(stripslashes(json_encode($_COOKIE, JSON_HEX_APOS)), true);
		$_REQUEST = json_decode(stripslashes(json_encode($_REQUEST, JSON_HEX_APOS)), true);
		$_SERVER = json_decode( stripslashes(json_encode($_SERVER,JSON_HEX_APOS)), true);
	*/
}



function pr($a)
{
    echo "<pre>";
    if (is_object($a)) {
        $a = (array) $a;
    }
    if (is_array($a)) {
        print_r($a);
    } else {
        echo $a;
    }
}

