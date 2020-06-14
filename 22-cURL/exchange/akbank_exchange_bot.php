<?php

function akbank_exchange(){
    $ch = curl_init();

    curl_setopt_array($ch,[
        CURLOPT_URL => 'https://www.akbank.com/_vti_bin/AkbankServicesSecure/FrontEndServiceSecure.svc/GetExchangeData?_='.time(),
        CURLOPT_RETURNTRANSFER => true,

    ]);

    $output = curl_exec($ch);

    curl_close($ch);

    $output = json_decode($output, true);

    $result = json_decode($output['GetExchangeDataResult'],true);

    //print_r($result['Currencies']);

    $eur =  $result['Currencies'][6];
    $usd =  $result['Currencies'][16];
    $gold =  $result['Currencies'][17];

    return [
      'USD' => [
          'rate' => $usd['Rate'],
          'sell' => $usd['Sell'],
          'buy' => $usd['Buy']
      ],
      'EURO' => [
        'rate' => $eur['Rate'],
        'sell' => $eur['Sell'],
        'buy' => $eur['Buy']
      ],
      'GOLD' => [
        'rate' => $gold['Rate'],
        'sell' => $gold['Sell'],
        'buy' => $gold['Buy']
      ]
    ];
}

$exchange = akbank_exchange();

//print_r($exchange);

?>

<ul>
    <?php foreach ($exchange as $key => $ex): ?>
        <li>
            <?=$key;?> <br>
            Sell: <?=$ex['sell'];?> <br>
            Buy: <?=$ex['buy'];?> <br>
            <div style="color: <?= $ex['rate'] > 0 ? 'green' : ( $ex['rate'] == 0 ? 'black' : ('red')) ?>;">
            Rate: %<?=sprintf('%.2f',$ex['rate']);?>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
