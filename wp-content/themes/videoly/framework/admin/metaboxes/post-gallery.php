<?php
/*
 * Post
*/
$sections[] = array(
  'icon' => 'el-icon-screen',
  'fields' => array(
    array(
      'id'        => 'post-gallery',
      'type'      => 'slides',
      'title'     => esc_html__('Gallery Slider', 'videoly'),
      'subtitle'  => esc_html__('Upload images or add from media library.', 'videoly'),
      'placeholder'   => array(
        'title'         => esc_html__('Title', 'videoly'),
      ),
      'show' => array(
        'title'       => true,
        'description' => false,
        'url'         => false,
      )
    ),
  )
);
