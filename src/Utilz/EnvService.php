<?php
declare(strict_types=1);

namespace zwarthoorn\eveapi\Utilz;

use Dotenv\Dotenv;

class EnvService
{
    public static function seedEnvFile(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

}