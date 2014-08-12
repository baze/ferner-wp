<?php $args = [
    'show_names' => 0,
    'show_flags' => 1,
    'hide_if_empty' => 1,
    'hide_if_no_translation' => 1,
    'hide_current' => 1,
] ?>

<ul class="lang-list"><?php pll_the_languages($args); ?></ul>