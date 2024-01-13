<?php
namespace Ksnth\HaveSMS;
class SMS 
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function balance()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://havesms.co.th/api/sms/balance',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $this->config['token']
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}