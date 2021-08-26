<?php

/**
 * @return
 * Contains \Drupal\test1\Controller\FirstPageController.
 */
 
namespace Drupal\test1\Controller;

use Drupal\Core\Controller\ControllerBase;
 
/**
 * Provides route responses for the test1 module.
 */
class SecondPageController extends ControllerBase {
 
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function content() {

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
    ];

    // $element = array(

     //  '#markup' => 'Helloooo',
   // );
    //return $element;
  } 
  // $test_var = 'Test Value';
  //return [
   // '#theme' => 'my_template',
    //'#test_var' => $this->t('Test Value'),
   // '#test_var' => $test_var,
 // ];
 
  }
