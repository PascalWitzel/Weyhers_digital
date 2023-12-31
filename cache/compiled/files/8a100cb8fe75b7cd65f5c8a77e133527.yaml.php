<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/weyhers/grav-admin/user/plugins/featherlight/blueprints.yaml',
    'modified' => 1501021008,
    'size' => 2718,
    'data' => [
        'name' => 'Featherlight',
        'version' => '1.5.0',
        'description' => 'Featherlight is a simple [Grav](http://github.com/getgrav/grav) plugin that adds **lightbox** functionality via the jQuery plugin [Featherlight.js](http://noelboss.github.io/featherlight/).',
        'icon' => 'file-photo-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-featherlight',
        'keywords' => 'featherlight, plugin, code, lightbox',
        'bugs' => 'https://github.com/getgrav/grav-plugin-featherlight/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'hightlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Active',
                    'hightlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Activate on all pages. You can override this setting on a page basis'
                ],
                'requirejs' => [
                    'type' => 'toggle',
                    'label' => 'RequireJS',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Outputs a AMD module to use with RequireJS'
                ],
                'gallery' => [
                    'type' => 'toggle',
                    'label' => 'Gallery',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable/disable the lightbox gallery extension'
                ],
                'openSpeed' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Open Speed',
                    'default' => '250',
                    'help' => 'Open Speed in ms'
                ],
                'closeSpeed' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Close Speed',
                    'default' => '250',
                    'help' => 'Close Speed in ms'
                ],
                'closeOnClick' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Close on Click',
                    'options' => [
                        'background' => 'background',
                        'anywhere' => 'anywhere',
                        'false' => 'false'
                    ]
                ],
                'closeOnEsc' => [
                    'type' => 'toggle',
                    'label' => 'Close on Esc',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Close the lightbox on hitting the Esc key'
                ],
                'root' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Root',
                    'default' => 'body',
                    'help' => 'Where to append featherlights'
                ],
                'initTemplate' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Init script',
                    'default' => 'plugin://featherlight/js/featherlight.init.js',
                    'placeholder' => 'plugin://featherlight/js/featherlight.init.js',
                    'help' => 'Path to template file for JS init script'
                ]
            ]
        ]
    ]
];
