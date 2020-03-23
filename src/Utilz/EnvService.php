<?php
declare(strict_types=1);

namespace zwarthoorn\eveapi\Utilz;



use Symfony\Component\Dotenv\Dotenv;

class EnvService
{
    public static function seedEnvFile(): void
    {
        $pathInPieces = explode('/', __DIR__);

        $dotenv = new Dotenv();
        $dotenv->load(__DIR__.'/.env');
    }

}