<?php
//config
$config = array(
	'localNetwork' => '192.168.1', //your local network ip range
	'domain' => 'domain.com', //the domain, used for all account names
	'routeAllTrafficTroughVPN' => true, //define if everything should be routed and encrypted through the vpn gateway (even internet traffic)
);

//users
$accounts = array(
	'mschluetz' => array('localIP' => '241', 'secret' => 'asdwefws8ewdfgd', 'password' => 'vergessn'),
	'scm' => array('localIP' => '242', 'secret' => '28d54jhiufiujfg', 'password' => 'vergessn'),
);
