<?php

return [
    'indicator' =>  [
        'simulation_lookback' => 0,
        'start' => 0,
        'offset' => .005,
        'accelInitLong' => 0.02,
        'accelLong' => .02,
        'accelMaxLong' => .1,
        'accelInitShort' => .02,
        'accelShort' => .02,
        'accelMaxShort' => .1,
    ],
    'adjustable' => [
        'simulation_lookback' => [
            'name' => 'Simulation lookback',
            'description' => 'Description TODO',
            'type' => 'int',
            'min' => 0,
            'step' => 1,
            'max' => 99,
        ],
        'start' => [
            'name' => 'Start',
            'description' => 'Start value and direction. 0 for auto, >0 for long, <0 for short.',
            'type' => 'float',
            'min' => -10,
            'step' => .005,
            'max' => 10,
        ],
        'offset' => [
            'name' => 'Offset',
            'description' => 'Percent offset added/removed to initial stop on short/long reversal.',
            'type' => 'float',
            'min' => 0,
            'step' => .005,
            'max' => 10,
        ],
        'accelInitLong' => [
            'name' => 'Long Acceleration Init',
            'description' => 'Acceleration factor initial value for the long direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
        'accelLong' => [
            'name' => 'Long Acceleration',
            'description' => 'Acceleration Factor for the long direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
        'accelMaxLong' => [
            'name' => 'Long Acceleration Max',
            'description' => 'Acceleration Factor maximum value for the long direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
        'accelInitShort' => [
            'name' => 'Short Acceleration Init',
            'description' => 'Acceleration factor initial value for the short direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
        'accelShort' => [
            'name' => 'Short Acceleration',
            'description' => 'Acceleration Factor for the short direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
        'accelMaxShort' => [
            'name' => 'Short Acceleration Max',
            'description' => 'Acceleration Factor maximum value for the short direction.',
            'type' => 'float',
            'min' => 0,
            'step' => .01,
            'max' => 10,
        ],
    ],
    'display' => [
        'name' => 'SAR',
        'description' => 'Parabolic Stop And Reverse',
        'y_axis_pos' => 'right',
        'top_level' => true,
    ],
];