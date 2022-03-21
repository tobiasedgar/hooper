<?php
return [
    'debug'   => true,
    'panel' => [
       'css' => 'assets/css/panel.css'
    ],
    'markdown' => [
      'extra' => true
    ],
    'thumbs' => [
      'presets' => [
        'standard' => ['width' => 1200, 'quality' => 80],
        'blurred' => ['width' => 30, 'quality' => 30, 'blur' => true]
      ]
    ]

];