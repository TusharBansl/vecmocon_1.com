<?php
return [
  'nav1' => [
    'show' => 'true',
    'position' => 'fixed-top',

    'brand' => [
      'show' => 'true',
      'url' => '/',
      'image' => '/data/logo.svg',
      'height' => '48px',
      'width' => '48px',
    ],

    'link' => [
      'item1' => [
        'type' => 'menuitem',
        'show' => '',
        'url' => ''
      ],
      'item2' => [
        'type' => 'submenu',
        'show' => 'true',

        'link' => [
          'item2.1' => [
            'type' => 'menuitem',
            'show' => '',
            'url' => ''
          ],
          'item2.2' => [
            'type' => 'submenu',
            'show' => '',

            'link' => [
              'item2.2.1' => [
                'type' => 'menuitem',
                'show' => '',
                'url' => ''
              ],
              'item2.2.2' => [
                'type' => 'menuitem',
                'show' => '',
                'url' => ''
              ],
              'item2.2.3' => [
                'type' => 'menuitem',
                'show' => '',
                'url' => ''
              ],
              'item2.2.4' => [
                'type' => 'menuitem',
                'show' => '',
                'url' => ''
              ],
              'item2.2.5' => [
                'type' => 'menuitem',
                'show' => '',
                'url' => ''
              ],
            ],
          ],
          'item2.3' => [
            'type' => 'menuitem',
            'show' => '',
            'url' => ''
          ],
        ],
      ],
      'item3' => [
        'type' => 'menuitem',
        'show' => '',
        'url' => ''
      ],
      'item4' => [
        'type' => 'menuitem',
        'show' => '',
        'url' => ''
      ],
    ],

  ],

  'nav2' =>[
    'show' => 'false',
    'position' => 'fixed-top',
  ],

  'nav3' => [
    'show' => 'true',
    'position' => 'fixed-bottom',
  ],
];

// 1) can contain multiple nav bars
// 2) nav bars can be multi level