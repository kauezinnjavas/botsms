<?php

include __DIR__.'/../includes/includes.php';
/*$tlg = new Telegram ('1809072637:AAHaOz6jGi9LVB3ZXI7YNWz5qSHSv4So_9A');*/
$tlg = new Telegram ('519568936:AAGn495DHqKoLusyyBhzI7yMi4ggMslLUjo');
print_r ($tlg->sendDocument ([
	'chat_id' => -10018064287776425,
	'caption' => "Backup\n@douxsms_bot\n".date ('d/m/Y H:i:s'),
	'document' => curl_file_create (__DIR__.'/../recebersmsbot.db')
]));