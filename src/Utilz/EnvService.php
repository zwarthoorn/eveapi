<?php
declare(strict_types=1);

namespace zwarthoorn\eveapi\Utilz;

use Dotenv\Dotenv;

class EnvService
{
    public static function seedEnvFile(): void
    {
        $pathInPieces = explode('/', __DIR__);
        $dotenv = Dotenv::createImmutable('/'.$pathInPieces[1]);
        $dotenv->load();
    }

}