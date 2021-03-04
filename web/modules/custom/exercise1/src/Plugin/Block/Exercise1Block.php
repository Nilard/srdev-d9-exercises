<?php

namespace Drupal\exercise1\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an 'Exercise 1' block.
 *
 * @Block(
 *   id = "exercise1_block",
 *   admin_label = @Translation("Exercise 1"),
 * )
 */
class Exercise1Block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Get previously fetched list of users.
    $users = \Drupal::state()->get('exercise1.users', []);

    if (!empty($users)) {
      $rows = [];

      // Convert list of users to tables rows.
      foreach ($users as $user) {
        $rows[] = [
          $user->name,
          $user->username,
          \Drupal\Core\Link::fromTextAndUrl($user->email, \Drupal\Core\Url::fromUri('mailto:' . $user->email))->toString(),
          $user->phone,
          \Drupal\Core\Link::fromTextAndUrl($user->website, \Drupal\Core\Url::fromUri('http://' . $user->website, ['attributes' => ['target' => '_blank']]))->toString(),
        ];
      }

      // Render table.
      return [
        '#theme' => 'table',
        '#header' => [
          $this->t('Name'),
          $this->t('Username'),
          $this->t('Email'),
          $this->t('Phone'),
          $this->t('Website'),
        ],
        '#rows' => $rows,
        '#attributes' => [
          'class' => [
            'views-table',
          ]
        ]
      ];
    }
    else {
      // Display a message to admin with instructions how to enable this block.
      if (\Drupal::currentUser()->hasPermission('administer site configuration')) {
        \Drupal::messenger()->addMessage($this->t('Please run cron to fetch list of users.'));
      }
    }
    
    return [];
  }
}
