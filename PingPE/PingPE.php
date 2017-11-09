<?php

/**
 *
 * @author InspectorGadget
 * Standard license applied, no copying.
 * All rights reserved RTGNetwork 
 *
**/

class PingPE {

	public function __construct($host, $port) {
		$this->returnPing($host, $port);
	}

	public function returnPing($host, $port, $timeout = 10) {
		$time_before = microtime(true);
		$socket = fsockopen("udp://" . $host, $port, $errno, $errstr, $timeout);
		if (!$socket) {
			echo "Server might be down!";
			return true;
		}
		$time_after = microtime(true);
		echo round((($time_after - $time_before)* 1000), 0) . " ms";
	}

}

?>