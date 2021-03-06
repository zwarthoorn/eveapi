<?php


namespace zwarthoorn\eveapi;


use GuzzleHttp\ClientInterface;
use Swagger\Client\Eve\Api\CharacterApi;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use zwarthoorn\eveapi\Authentication\EveAuth;

class Character extends CharacterApi
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

    public function getCharactersCharacterId($character_id = null, $datasource = 'tranquility', $if_none_match = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterId($character_id, $datasource, $if_none_match); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdAgentsResearch($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdAgentsResearch($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdBlueprints($character_id, $datasource = 'tranquility', $if_none_match = null, $page = 1, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdBlueprints($character_id, $datasource, $if_none_match, $page, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdCorporationhistory($character_id, $datasource = 'tranquility', $if_none_match = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdCorporationhistory($character_id, $datasource, $if_none_match); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdFatigue($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdFatigue($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdMedals($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdMedals($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdNotifications($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdNotifications($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdPortrait($character_id, $datasource = 'tranquility', $if_none_match = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdPortrait($character_id, $datasource, $if_none_match); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdRoles($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdRoles($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdStandings($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdStandings($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdStats($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdStats($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdTitles($character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdTitles($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }
}