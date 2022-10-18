<?php

namespace Halink\WizaHeader;

use Halink\WizaHeader\Exceptions\ClientException;

class Wiza
{
    private $key, $url;
    public function __construct(string $apiUrl, string $key)
    {
        $this->url = $apiUrl;
        $this->key = $key;
    }
    public function getMenus()
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $this->url . '/api/halink/wiza-menu');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5000);
        // https
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'halink-key: ' . $this->key,
        ]);
        if (($result = curl_exec($curl)) === false) {
            throw new ClientException(curl_error($curl));
        }
        $error = curl_error($curl);
        $httpReturnCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($httpReturnCode != 200) {
            throw new ClientException('Token is invalid or expired');
        }
        // var_dump($this->key);
        return json_decode($result, true);
    }
}
