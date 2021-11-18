<?php
//Addon by DJ//

//Remove My Files//
if (copy(__DIR__ . '/../../../system/chat_command.php', __DIR__ . '/../files/chat_command.php')) {
	unlink(__DIR__ . '/../../../system/chat_command.php');
}
if (copy(__DIR__ . '/../../../js/function_main.js', __DIR__ . '/../files/function_main.js')) {
	unlink(__DIR__ . '/../../../js/function_main.js');
}

//Move in Old Files//
if (copy(__DIR__ . '/../files/backup/chat_command.php', __DIR__ . '/../../../system/chat_command.php')) {
	unlink(__DIR__ . '/../files/backup/chat_command.php');
}
if (copy(__DIR__ . '/../files/backup/function_main.js', __DIR__ . '/../../../js/function_main.js')) {
	unlink(__DIR__ . '/../files/backup/function_main.js');
}
?>