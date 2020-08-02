<?php

if (! function_exists('dbug')) {
	function dbug() {
		$args = func_get_args();
		$dbug = [];
		foreach ($args as $arg) {
			$msg = print_r($arg, true);
			$dbug[] = trim($msg);
		}
		$dbug = "\n" . implode("\n", $dbug);
		error_log($dbug);
	}
}
