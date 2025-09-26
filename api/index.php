<?php

// Serverless entry for Laravel on Vercel

// Adjust working directory to project root (the folder that contains vendor/)
chdir(dirname(__DIR__));

// Static file handling (when deployed, Vercel routes handle most of this)
if (PHP_SAPI === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $full = __DIR__ . '/../public' . $path;
    if ($path !== '/' && file_exists($full)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);


