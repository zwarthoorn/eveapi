<?php


namespace zwarthoorn\eveapi\Authentication;


use Killmails\OAuth2\Client\Provider\EveOnline;
use League\OAuth2\Client\Token\AccessToken;
use zwarthoorn\eveapi\Utilz\EnvService;
use function Couchbase\defaultDecoder;
use function PHPUnit\Framework\throwException;

class EveAuth implements EveAuthInterface
{

    private $provider;
    private $resourceOwner;

    public function __construct()
    {
        if (!getenv('SEVERNAME'))
        {
            EnvService::seedEnvFile();
        }
        $this->provider = new EveOnline([
            'clientId' => getenv('CLIENT_ID'),
            'clientSecret' => getenv('CLIENT_SECRET'),
            'redirectUri' => getenv('REDIRECT_URL'),

        ]);
    }

    public function sendAuthenticationRequest()
    {
        // Fetch the authorization URL from the provider; this returns the
        // urlAuthorize option and generates and applies any necessary parameters
        // (e.g. state).

        $options = [
            'scope' => getenv('SCOPE')
        ];
        $authorizationUrl = $this->provider->getAuthorizationUrl($options);


        // Get the state generated for you and store it to the session.
        $_SESSION['oauth2state'] = $this->provider->getState();

        // Redirect the user to the authorization URL.
        header('Location: ' . $authorizationUrl);
        exit;

    }

    public function procesAuthenticationRequest()
    {

        if (empty($_GET['state']) || (isset($_SESSION['oauth2state']) && $_GET['state'] !== $_SESSION['oauth2state'])) {
            if (isset($_SESSION['oauth2state'])) {
                unset($_SESSION['oauth2state']);
            }

            throw new \Exception('the tokens did not line up with the stars');
        }

        try {

            // Try to get an access token using the authorization code grant.
            $accessToken = $this->provider->getAccessToken('authorization_code', [
                'code' => $_GET['code']
            ]);

            // We have an access token, which we may use in authenticated
            // requests against the service provider's API.
            echo 'Access Token: ' . $accessToken->getToken() . "<br>";
            echo 'Refresh Token: ' . $accessToken->getRefreshToken() . "<br>";
            echo 'Expired in: ' . $accessToken->getExpires() . "<br>";
            echo 'Already expired? ' . ($accessToken->hasExpired() ? 'expired' : 'not expired') . "<br>";

            //save all accestokens

            setcookie('accesToken',$accessToken->getToken());
            setcookie('Refresh',$accessToken->getRefreshToken());
            setcookie('Expired', $accessToken->getExpires());

            // Using the access token, we may look up details about the
            // resource owner.
            $resourceOwner = $this->provider->getResourceOwner($accessToken);


        } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {

            // Failed to get the access token or user details.
            throw new \Exception($e->getMessage());

        }

        return $resourceOwner;
    }

    public function makeAuthentication()
    {
        if ($_COOKIE['Expired'])
        {
            $this->checkIfExpired();
        }

        if ($_COOKIE['accesToken']) {
            $accestoken = new AccessToken(['access_token' => $_COOKIE['accesToken']]);
            $this->setResourceOwner($this->provider->getResourceOwner($accestoken));
            return $_COOKIE['accesToken'];
        }

        if (!isset($_GET['code'])) {
            $this->sendAuthenticationRequest();
        }

        try {
            $resourceOwner = $this->procesAuthenticationRequest();
            $this->setResourceOwner($resourceOwner);
        }catch (\Exception $e)
        {
            echo $e->getMessage();
            throw new \Exception($e->getMessage());
        }

        return $_COOKIE['accesToken'];
    }

    protected function checkIfExpired(): void
    {
        $controllDateTime = new \DateTime();

        if ($controllDateTime->getTimestamp() > (int)$_COOKIE['Expired']) {
            $this->setNewAcces();
        }
    }

    public function setNewAcces(): void
    {
        $newAccessToken = $this->provider->getAccessToken('refresh_token', [
            'refresh_token' => $_COOKIE['Refresh']
        ]);

        setcookie('accesToken', $newAccessToken->getToken());
        setcookie('Refresh', $newAccessToken->getRefreshToken());
        setcookie('Expired', $newAccessToken->getExpires());
    }

    public function setResourceOwner($resourceOwnder)
    {
        $this->resourceOwner = $resourceOwnder;
    }

    public function getResourceOwner()
    {
        return $this->resourceOwner;
    }
}