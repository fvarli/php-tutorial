<?php

$array = [
    "Ferzender", "Varli", "Software Developer"
];

//echo json_encode($array);

//echo '<br>';
//echo '<br>';

$array_to_json = [
    'name' => 'John',
    'last_name' => 'Doe',
    'websites' => [
        [
            'ur' => 'https://ferzendervarli.com',
            'title' => 'Software Developer'
        ],
        [
            'ur' => 'https://test.com',
            'title' => 'Test'
        ]
    ]
];

//echo json_encode($array_to_json);

$json_to_array = '{
  "name": "Jone",
  "last_name": "Deo",
  "websites": [
    {
      "url": "https://ferzendervarli.com",
      "title": "Software Developer"
    },
    {
      "url": "https://test.com",
      "title": "Test"
    }
  ]
}';

$new_array = json_decode($json_to_array, true);
print_r($new_array);

$get_json_file = file_get_contents('test.json');
$convert_to_array = json_decode($get_json_file);

print_r($convert_to_array);