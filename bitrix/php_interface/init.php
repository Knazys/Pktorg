<?
function dump($var, $vardump = false, $return = false)
{
	static $dumpCnt;

	if (is_null($dumpCnt)) {
		$dumpCnt = 0;
	}
	ob_start();

		echo '<b>DUMP #' . $dumpCnt . ':</b> ';
		echo '<p>';
		echo '<pre>';
		if ($vardump) {
			var_dump($var);
		} else {
			print_r($var);		
		}
		echo '</pre>';
		echo '</p>';

	$cnt = ob_get_contents();
	ob_end_clean();
	$dumpCnt++;
	if ($return) {
		return $cnt;
	} else {
		echo $cnt;
	}
}


// функция трассировки
function dump2log($var)
{
	static $dumpCnt;

	if (is_null($dumpCnt)) {
		$dumpCnt = 0;
	}
	ob_start();

		echo '<b>DUMP #' . $dumpCnt . ':</b> ';
		echo '<p>';
		echo '<pre>';
		
		print_r($var);		

		echo '</pre>';
		echo '</p>';

	$cnt = ob_get_contents();
	ob_end_clean();
	$dumpCnt++;
	
	define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/dump_log.txt");	
	
	AddMessage2Log($cnt);
}


?>