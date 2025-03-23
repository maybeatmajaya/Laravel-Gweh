<?php

require_once __DIR__.'/../bootstrap/app.php';

use Illuminate\Foundation\Application;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// HAPUS atau KOMENTAR BAGIAN INI
// $app->withMiddleware(function ($middleware) {
//     $middleware->appendToGroup('api', [
//         EnsureFrontendRequestsAreStateful::class,
//         'throttle:api',
//         SubstituteBindings::class,
//     ]);
// });

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;
