<?php

// Отримуємо поточний шлях запиту
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);

// Перевіряємо, чи запит спрямований на /health
if ($path === '/health') {
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(200);
    
    echo json_encode([
        'status' => 'ok',
        'version' => '0.1.0'
    ], JSON_UNESCAPED_UNICODE);
    
    exit;
}

// Стандартна відповідь для решти сторінок
echo "Вітаємо у проєкті Infoklas!";