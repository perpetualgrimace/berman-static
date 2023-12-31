<?php

// get child pages
$sections = $page->children()->published();

// use each child page's template as a section on the page
foreach($sections as $section):

  $template = $section->intendedTemplate();
  snippet($template, ['section' => $section]);

endforeach;
