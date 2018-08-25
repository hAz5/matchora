<?php

use Faker\Generator as Faker;
use App\Match;
$factory->define(App\Match::class, function (Faker $faker) {
    return [
        Match::LEAGUE => array_random(['English', 'spain', 'italy', 'Iran', 'Japan']),
        Match::STATUS => array_random([
            Match::STATUS_SUCCESS,
            Match::STATUS_FAILED,
            Match::STATUS_CLOSED
        ]),
        Match::RESULT => array_random([null, 'OK', 'NOK']),
        Match::TYPE => array_random([
          Match::TYPE_VIP,
          Match::TYPE_FREE,
          Match::TYPE_PRO
        ]),
        Match::PREDICTION => array_random(['HOST', 'Guest' , 'Equal', 'Over 1.5', 'Over 2.5']),
        Match::HOST => array_random(['FBC', 'real madrid', 'chelsia', 'manchester', 'perspolis', 'esteghlal']),
        Match::GUEST => array_random(['FBC', 'real madrid', 'chelsia', 'manchester', 'perspolis', 'esteghlal']),
        Match::DESCRIPTION => $faker->text
    ];
});
