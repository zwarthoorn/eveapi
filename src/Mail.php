<?php


namespace zwarthoorn\eveapi;


use GuzzleHttp\ClientInterface;
use Swagger\Client\Eve\Api\MailApi;
use Swagger\Client\Eve\Configuration;
use Swagger\Client\Eve\HeaderSelector;
use zwarthoorn\eveapi\Authentication\EveAuth;

class Mail extends MailApi
{
    /**
     * @var EveAuth
     */
    private $eveAuth;

    public function __construct($keys = null, ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null, $host_index = 0)
    {
        if ($config === null)
        {
            $this->eveAuth = new EveAuth($keys);
            $config = new Configuration();
            $config->setAccessToken($this->eveAuth->makeAuthentication());
        }
        parent::__construct($client, $config, $selector, $host_index);
    }

    public function getCharactersCharacterIdMail($character_id = null, $datasource = 'tranquility', $if_none_match = null, $labels = null, $last_mail_id = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdMail($character_id, $datasource, $if_none_match, $labels, $last_mail_id, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdMailLabels($character_id = null, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdMailLabels($character_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdMailLists($character_id = null, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::getCharactersCharacterIdMailLists($character_id = null, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function getCharactersCharacterIdMailMailId($mail_id, $character_id, $datasource = 'tranquility', $if_none_match = null, $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }

        return parent::getCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $if_none_match, $token); // TODO: Change the autogenerated stub
    }

    public function deleteCharactersCharacterIdMailLabelsLabelId($label_id, $character_id = null,  $datasource = 'tranquility', $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        parent::deleteCharactersCharacterIdMailLabelsLabelId($character_id, $label_id, $datasource, $token); // TODO: Change the autogenerated stub
    }

    public function deleteCharactersCharacterIdMailMailId( $mail_id, $character_id = null, $datasource = 'tranquility', $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        parent::deleteCharactersCharacterIdMailMailId($character_id, $mail_id, $datasource, $token); // TODO: Change the autogenerated stub
    }

    public function postCharactersCharacterIdMail($mail, $character_id = null, $datasource = 'tranquility', $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::postCharactersCharacterIdMail($character_id, $mail, $datasource, $token); // TODO: Change the autogenerated stub
    }

    public function postCharactersCharacterIdMailLabels($label, $character_id = null,  $datasource = 'tranquility', $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        return parent::postCharactersCharacterIdMailLabels($character_id, $label, $datasource, $token); // TODO: Change the autogenerated stub
    }

    public function putCharactersCharacterIdMailMailId($mail_id, $contents, $character_id, $datasource = 'tranquility', $token = null)
    {
        if ($character_id === null)
        {
            $character_id = $this->eveAuth->getResourceOwner()->getId();
        }
        parent::putCharactersCharacterIdMailMailId($character_id, $mail_id, $contents, $datasource, $token); // TODO: Change the autogenerated stub
    }
}