<?php

class Cache
{
    static $status = -1;

    static function get($path, $query_string = "")
    {
        $cache = file_get_contents('cache.json');
        $cache = json_decode($cache,1);
        $qs    = "";
        if($query_string)
        {
            parse_str($query_string, $qs);
        }

        if(isset($cache[$path]))
        {
            $data = $cache[$path];
    
            if($qs)
            {
                $data = array_filter($data, function($row) use ($qs){
                    foreach($qs as $key => $value)
                    {
                        if($row[$key] != $value) return false;
                    }
    
                    return true;
                });
            }
    
            return json_encode($data);
        }

        return "[]";
    }

    static function push($path, $response)
    {
        $cache = file_get_contents('cache.json');
        $cache = json_decode($cache,1);

        $cache[$path] = json_decode($response,1);

        return file_put_contents('cache.json',json_encode($cache));
    }
}