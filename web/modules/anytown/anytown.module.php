<?php

/**
 * @file
 * Hook implementations for anytown module.
 */

/**
 * Implements hook_theme().
 */
function anytown_theme() {
  return [
    'weather_page' => [
      'variables' => [
        'weather_intro' => '',
        'weather_forecast' => '',
        'short_forecast' => '',
        'weather_closures' => '',
      ],
    ],
  ];
}
