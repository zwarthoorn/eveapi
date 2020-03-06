<?php


namespace zwarthoorn\eveapi;


use GuzzleHttp\ClientInterface;
use Swagger\Client\Eve\Api\AllianceApi;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use zwarthoorn\eveapi\Authentication\EveAuth;

class Alliance extends AllianceApi
{
    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null, $host_index = 0)
    {
        if ($config === null)
        {
           $token = new EveAuth();
            $config = new Configuration();
            $config->setAccessToken($token->makeAuthentication());
        }

        parent::__construct($client, $config, $selector, $host_index);
    }
}