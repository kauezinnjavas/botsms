<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (TOKEN_BOT);

$tlg->sendMessage ([
'chat_id' => CHAT_ID_NOTIFICACAO,
'text' => "<b>🤓 RECEBA SMS COM NÚMEROS NOVOS PARA CRIAR CONTAS</b>

- Telegram
- Whatsapp
- 99app
- Banqi
- Uber
- E muitos outros...

💬 Receba os códigos no nosso bot
@douxsms_bot

🌐 Canal de Referências
@off por enquanto
📍 Nosso Canal
@off por enquanto

*Preço e serviço incomparável com os existentes.
*Mais de 4 mil números disponíveis",
'parse_mode' => 'html'
]);