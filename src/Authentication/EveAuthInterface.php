<?php


namespace zwarthoorn\eveapi\Authentication;


interface EveAuthInterface
{

    public function sendAuthenticationRequest();

    public function procesAuthenticationRequest();

}