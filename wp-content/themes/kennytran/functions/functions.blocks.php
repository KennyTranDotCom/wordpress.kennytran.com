<?php

// Allow specific blocks only
function KennyTranDotCom_allowed_block_types($allowed_blocks, $post) {
    $allowed_blocks = array(
        'core/code',
        'core/columns',
        'core/heading',
        'core/html',
        'core/image',
        'core/list',
        'core/paragraph',
    );

    return $allowed_blocks;
}
add_filter('allowed_block_types_all', 'KennyTranDotCom_allowed_block_types', 10, 2);

// Remove patterns
remove_theme_support('core-block-patterns');

// Remove styles
function KennyTranDotCom_remove_block_style() {
    wp_register_script('remove-block-style', get_template_directory_uri() . '/functions/functions.blocks.remove-styles', ['wp-blocks', 'wp-edit-post']);

    register_block_type('remove/block-style', [
        'editor_script' => 'remove-block-style',
    ]);
}
add_action('init', 'KennyTranDotCom_remove_block_style');