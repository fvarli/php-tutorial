<?php

header('Content-type: text/xml');
$xml = new SimpleXMLElement('<fvarli/>');
$xml->addChild('name', 'Ferzender');
$xml->addChild('last_name', 'Varli');
$websites = $xml->addChild('websites');
    $site = $websites->addChild('site');
        $site->addAttribute('id',1);
        $url = $site->addChild('url', 'https://ferzendervarli.com');
            $url->addAttribute('title', 'Ferzender Varli');
        $site->addChild('title', 'Software Developer');
    $site = $websites->addChild('site');
        $site->addAttribute('id',2);
        $url = $site->addChild('url', 'https://test.com');
            $url->addAttribute('title', 'test');
        $site->addChild('title', 'Test');

//echo $xml->asXML();

$array = [
    'name' => 'Ferzender',
    'lastname' => 'Varli',
    'websites' => [
        0 => [
            'url' => 'https://ferzendervarli.com',
            'title' => 'Software Developer'
        ],
        1 => [
            'url' => 'https://test.com',
            'title' => 'Test'
        ]
    ]
];

function array_to_xml($array, $xml){
    foreach ($array as $key=>$value){
        if(is_array($value)){
            if(is_numeric($key)){
                $key ='site';
            }
            array_to_xml($value,$xml->addChild($key));
        }else{
            $xml->addChild($key, $value);
        }
    }
    return $xml->asXML();
}

echo array_to_xml($array, new SimpleXMLElement('<fvarli/>'));