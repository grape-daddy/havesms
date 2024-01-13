<?php
namespace HaveSMS;
class SMS 
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function balance()
    {
        $client = new GuzzleHttp();

        return $client->get('https://havesms.co.th/api/sms/balance', [
            'headers' => [
                'host' => 'havesms.co.th',
                'Authorization' => 'Bearer ' . $this->config['token'],
            ]
        ]);
    }
}