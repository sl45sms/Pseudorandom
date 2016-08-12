<?php

/**
 * Declare our sort plugin to views.
 *
 * @return array
 *    The views data array.
 */
function pseudorandom_views_data() {

  $data['pseudorandom']['table']['group']  = t('Global');
  $data['pseudorandom']['table']['join']  = array(
    '#global' => array(),
  );

  $data['pseudorandom']['pseudorandom'] = array(
    'title' => t('Pseudo Random'),
    'help' => t('Randomize the display order using seed number based on day of year. Useful for pagination.'),
    'sort' => array(
      'id' => 'pseudorandom',
    ),
  );
  return $data;

}
