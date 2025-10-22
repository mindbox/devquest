<?php
return [
    'ctrl' => [
        'title' => 'Immo',
        'label' => 'street',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
        'searchFields' => 'street,postal_code,city',
        'iconfile' => 'EXT:devquest_site/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                hidden,
                cold_rent, warm_rent, area, rooms,
                street, postal_code, city
            ',
        ],
    ],
    'columns' => [
        'hidden' => [
            'label' => 'Hidden',
            'config' => [
                'type' => 'check',
            ],
        ],

        'cold_rent' => [
            'label' => 'Cold rent',
            'config' => [
                'type' => 'input',
                'eval' => 'double2',
                'default' => 0.0,
            ],
        ],
        'warm_rent' => [
            'label' => 'Warm rent',
            'config' => [
                'type' => 'input',
                'eval' => 'double2',
                'default' => 0.0,
            ],
        ],
        'area' => [
            'label' => 'Area m²',
            'config' => [
                'type' => 'input',
                'eval' => 'double2',
                'default' => 0.0,
            ],
        ],
        'rooms' => [
            'label' => 'Rooms',
            'config' => [
                'type' => 'input',
                'eval' => 'int',
                'default' => 0,
            ],
        ],
        'street' => [
            'label' => 'Street',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'postal_code' => [
            'label' => 'Postal code',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'size' => 8,
                'max' => 10,
            ],
        ],
        'city' => [
            'label' => 'City',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
    ],
];