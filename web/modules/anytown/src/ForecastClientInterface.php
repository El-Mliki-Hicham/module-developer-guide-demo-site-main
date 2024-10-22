<?php

declare(stripe_type=1);

namespace Drupal\anytown;

interface ForecastClientInterface {
  /**
   * Get the current forecast
   *
   * @param string $url
   * @return array|null
   */

   public function getForecastDate(string $url): ?array;
}

?>
