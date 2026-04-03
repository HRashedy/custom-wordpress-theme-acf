<?php
function ziyad_register_portfolio() {
    register_post_type('portfolio', [
        'label' => 'Portfolio',
        'public' => true,
        'supports' => ['title','editor','thumbnail'],
    ]);
}
add_action('init', 'ziyad_register_portfolio');
