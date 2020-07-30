<?php

function readConfig() {
    $config_dir = __DIR__.'/.env';
    if (fopen($config_dir, 'r')) {
        $content = file_get_contents($config_dir);
        $start = strpos($content, '#DB-SETTINGS');
        $end = strpos($content, '#END-DB-SETTINGS');
        
        return setAttributes(substr($content, $start, $end));
    }
    else {
        die('.env not found');
    }
}

function setAttributes($sql) {
    $aux = explode('$', $sql);
    unset($aux[0]);
    $response = [];
    foreach ($aux as $value) {
        $attr = explode('=', $value);
        $val = explode('"', $attr[1]);
        $attribute = $attr[0];
        $setVal = $val[1];
        $response[$attribute] = $setVal;
    }

    return $response;
}

$obj = readConfig();

$DBDRIVER = $obj['DBDRIVER'];
$DBHOST = $obj['DBHOST'];
$DBNAME = $obj['DBNAME'];
$DBUSER = $obj['DBUSER'];
$DBPASS = $obj['DBPASS'];
$DBPORT = $obj['DBPORT'];