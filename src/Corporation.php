<?php


namespace zwarthoorn\eveapi;


use GuzzleHttp\ClientInterface;
use Swagger\Client\Eve\Api\CorporationApi;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use zwarthoorn\eveapi\Authentication\EveAuth;

class Corporation extends CorporationApi
{

    /**
     * @var EveAuth
     */
    private $eveAuth;

    public function __construct(ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null, $host_index = 0)
    {
        if ($config === null)
        {
            $this->eveAuth = new EveAuth();
            $config = new Configuration();
            $config->setAccessToken($this->eveAuth->makeAuthentication());
        }

        parent::__construct($client, $config, $selector, $host_index);
    }
}