<?php

declare(strict_types=1);

namespace Drupal\anytown\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a helloworld block.
 *
 * @Block(
 *   id = "anytown_helloworld",
 *   admin_label = @Translation("HelloWorld"),
 *   category = @Translation("Custom"),
 * )
 */
final class HelloworldBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
