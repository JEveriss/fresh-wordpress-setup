<?php
$context = timber::context();
// initiating the data variable that gets passed to the twig template

// get the contents of the current page
$post = new Timber\Post();

$context['data'] = [
  'pageTitle' => get_the_title($post),
  'songTitle'=> get_field('songTitle', $post->ID),
  'albumImage' => get_field('albumImage', $post->ID),
  'singleImage' => get_field('singleImage', $post->ID),
  'albumTitle' => get_field('albumTitle', $post->ID),
  'members' => get_field('members', $post->ID),
  'releaseDate' => get_field('releaseDate', $post->ID),
  'trackListing' => get_field('trackListing', $post->ID),
  'review' => get_field('review', $post->ID)
];

$template = get_field('template', $post->ID);

// the below line HAS TO BE LAST
if (!$template){
  $template = 'blueTemplate';
}
timber::render('views/templates/'.$template.'.twig', $context);

// echo "<pre>";
// var_dump($context['data']);
// echo "</pre>";
// exit();