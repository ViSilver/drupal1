<?php

// Plugin definition
$plugin = array(
  'title' => t('One row two column2'),
  'category' => t('onerowtwocols'),
  'icon' => 'vi.png',
  'theme' => 'vi',
  'css' => 'vi.css',
  'regions' => array(
  	'top' => t('Top side'),	
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
