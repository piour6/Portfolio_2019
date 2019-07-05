<?php 
if(isset($_SERVER['HTTP_HOST']) && isset($configDomain)){

    $http_host = str_replace("www.", "", $_SERVER['HTTP_HOST']);

    if($http_host == 'pierre'){
        $infoDomain = $configDomain['intra'];
    }
    elseif($http_host == $configDomain['preview']['url']){
        $infoDomain = $configDomain['preview'];
    }
    else{
        if(isset($configDomain['online']['multi']) && $configDomain['online']['multi']){
            if(isset($configDomain['online'][$http_host])){
                $infoDomain = $configDomain['online'][$http_host];
            }else{
                $infoDomain = $configDomain['online'][$configDomain['online']["default"]];
            }
        }else{
            $infoDomain = $configDomain['online'];
        }        
    }

    $secure = false;
    if(isset($infoDomain['secure']) && $infoDomain['secure']){
        $secure = true;
    }
    $www = false;
    if(isset($infoDomain['www']) && $infoDomain['www']){
        $www = true;
    }

    $baseRoot = ($secure ? "https://" : "http://") . ($www ? "www." : "") . $infoDomain['url'];

    $domain = $baseRoot;
    $userfileRoot = $baseRoot . "/userfiles";

    $default_lang = $infoDomain['default_lang'];
    $accepted_lang = $infoDomain['accepted_lang'];
    $include_folder = $infoDomain['include_folder'];
   
}else{
    exit("ERROR DOMAIN");
}
?>