<?php

//XML
//eXtensible Markup Language


$xml = simplexml_load_file('test.xml');

//print_r($xml);

$get_xml = '<?xml version="1.0" encoding="UTF-8" ?>
<fvarli>
    <name>Ferzender</name>
    <lastname>Varli</lastname>
    <websites>
        <site id="1">
            <url>https://ferzendervarli.com</url>
            <title>Software Developer</title>
        </site>
        <site id="2">
            <url>https://test.com</url>
            <title>Test</title>
        </site>
    </websites>
</fvarli>';

$show_xml = simplexml_load_string($get_xml);
print_r($show_xml);