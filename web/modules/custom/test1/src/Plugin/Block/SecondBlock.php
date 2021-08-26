<?php
 
namespace Drupal\test1\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;

 
/**
 * Provides a block with a simple text.
 *
 * @block(
 *   id = "test1_second_block_block",
 *   admin_label = @Translation("My second block"),
 * )
 */
class SecondBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
   date_default_timezone_set('Asia/Yekaterinburg');

   $date1 = time();
   $date2 = strtotime("01.01.2022");

   $diff = $date2 - $date1;
   $d = floor($diff/86400);
   $h = floor(($diff%86400)/3600);
   $m = floor((($diff%86400)%3600)/60);

    return [
      '#theme' => 'my_template',
      //'#test_var' => $this->t('Test Value'),
      '#date1' => $date1,
      '#date2' => $date2,
      '#diff' => $diff,
      '#d' => $d,
      '#h' => $h,
      '#m' => $m,
      '#dd' => $dd,
    ];

  }
 
 
}?>