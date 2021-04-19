<?php

@include_once __DIR__ . '/vendor/autoload.php';

use Romans\Filter\RomanToInt;
use Romans\Filter\IntToRoman;

Kirby::plugin('moevbiz/k3-romans', [
    'fieldMethods' => [
        'romanToInt' => function ($field) 
        {
            $filter = new RomanToInt();
            $result = $filter->filter($field->value());
            return $result;
        },
        'intToRoman' => function ($field)
        {
            $filter = new IntToRoman();
            $result = $filter->filter($field->value());
            return $result;
        }
    ],
    'pageMethods' => [
        'romanToInt' => function (string $value): int 
        {
            $filter = new RomanToInt();
            $result = $filter->filter($value);
            return $result;
        },
        'intToRoman' => function (int $value): string 
        {
            $filter = new IntToRoman();
            $result = $filter->filter($value);
            return $result;
        }
    ]
]);
