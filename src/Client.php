<?php

require __DIR__ . '/Result.php';
require __DIR__ . '/Environment.php';

class Client
{
    /**
     * @var string
     */
    private $environment;

    /**
     * @var string
     */
    private $authorization;

    /**
     * @param string $endpoint
     * @param array $params
     *
     * @return mixed
     * @throws Exception
     */
    public function post($endpoint="", $params=[])
    {
        if (empty($this->getEnvironment())) {
            throw new Exception("Environment was not given!");
        }

        $uri = $this->getEnvironment() . $endpoint;

        $ch = curl_init($uri);

        $header = array();
        $header[] = 'Content-type: application/json';
        $header[] = 'Authorization: ' . $this->getAuthorization();

        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POST => TRUE,
            CURLOPT_USERAGENT => "PHP Client",
            CURLOPT_REFERER => "PHP Client",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_POSTFIELDS => $params
        ]);

        return json_decode($ch, true);
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment($environment="")
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @param string $authorization
     */
    public function setAuthorization($authorization="")
    {
        $this->authorization = $authorization;
    }
}