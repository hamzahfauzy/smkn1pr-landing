<?php

class Service
{
    public $API_URL = '';
    function __construct($API_URL)
    {
        $this->API_URL = $API_URL;
    }

    function request($path, $method = 'GET', $data = [], $headers = [])
    {
        $endpoint     = $this->API_URL . $path;
        $query_params = "";
        $response     = "";
        if($method == 'GET')
        {
            if(!empty($data))
            {
                $query_params = http_build_query($data);
                $endpoint = $endpoint . '?' . $query_params;
            }

        }

        if(Cache::$status)
        {
            $response = Cache::get($path, $query_params);
        }
        
        if(empty(json_decode($response)))
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $endpoint);
            if($method == 'POST')
            {
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }
    
            if(!empty($headers))
            {
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            }
    
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($curl);
    
            curl_close($curl);

            if(Cache::$status != -1)
            {
                Cache::push($path, $response);
            }
        }
        
        $response = json_decode($response,1);

        return $response;
    }
}