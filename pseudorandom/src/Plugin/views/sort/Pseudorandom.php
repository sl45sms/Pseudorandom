<?php
/**
 * @file
 * Definition of Drupal\pseudorandom\Plugin\views\sort\Pseudorandom.
 */
 
namespace Drupal\pseudorandom\Plugin\views\sort;

use Drupal\views\Plugin\views\sort\SortPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Views;
use Drupal\Core\Cache\CacheableDependencyInterface;


/**
 * Handle a pseudorandom sort.
 *
 * @ViewsSort("pseudorandom")
 */
class Pseudorandom extends SortPluginBase implements CacheableDependencyInterface {

  /**
   * {@inheritdoc}
   */
  public function usesGroupBy() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    $this->query->addOrderBy(NULL,' RAND('.idate('z').') ','ASC','pseudorandom');
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
    $form['order']['#access'] = FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return [];
  }

}
