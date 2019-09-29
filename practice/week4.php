<?php
	
// $cards = [1, 2, 3, 4, 5, 6, 7, 8];

// shuffle($cards);
// var_dump($cards);

// $randomNumber = rand(0,99);

// var_dump($randomNumber);

// $penny_value = .01;
// $nickel_value = .05;
// $dime_value = .10;
// $quarter_value = .25;

//multidimensional array
// $coins = [
//     'pennies' => [.01, 300], // the key is 'pennies' the value is [.01, 300] 
//     'nickels' => [.05, 5], // .05 is position 0, 5 is position 1
//     'dimes' => [.10, 0],
//     'quarters' => [.25, 125],
//     'halfDollars' => [.50, 50]
// ];

//multimensional array that conatains associative arrays
$coins = [
    'pennies' => [
        'value' => .01, 
        'count' => 300
    ], 
    'nickels' => [
        'value' => .05, 
        'count' => 5
    ], 
    'dimes' => [
        'value' => .10, 
        'count' => 0
    ],
    'quarters' => [
        'value' => .25, 
        'count' => 125
    ],
    'halfDollars' => [
        'value' => .50, 
        'count' => 50
        ]
];

$coinValues = [
    'pennies' => .01,
    'nickels' => .05,
    'dimes' => .10,
    'quarters' => .25,
];
 
$coinCounts = [
    'pennies' => 300,
    'nickels' => 5,
    'dimes' => 0,
    'quarters' => 125,
];

// var_dump($coinValues);
// var_dump($coinValues['dimes']);

// var_dump($coinCounts);
// asort($coinCounts);
// var_dump($coinCounts);

// foreach($coinCounts as $key => $value) {
//     var_dump("For " . $key . " you have: " . $value);
// };



// foreach($coinCounts as $coin => $count) {
//     var_dump("For " . $coin . " you have: " . $count);
// }

// $total = 0;
// foreach($coinCounts as $coin => $count) {
//     $total = $total + $count * $coinValues[$coin];
// }

// $total = 0;
// foreach($coins as $coin => $info)
//     $total = $total + ($info['count'] * $info['value']);
// var_dump($total);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// shuffle($cards);

// $player1Cards = array_splice($cards, 0, 5);
// $player2Cards = $cards; //what's left after the splice

// var_dump($player1Cards);
// var_dump($player2Cards);

// var_dump (date('F j Y'));

// var_dump (rand());
// var_dump (rand(0,99)); 

// var_dump(11>9); #true
// var_dump(4>9); #false
 
// var_dump(9==9); #true