<?php

function az_asset(string $path): string {
    return get_template_directory_uri() . '/' . ltrim($path, '/');
}
function az_img(string $path, string $alt = '', string $class = ''): string {
    $src = esc_url( az_asset('assets/imgs/' . ltrim($path, '/')) );
    $alt_attr = esc_attr($alt);

    $class_attr = $class ? ' class="' . esc_attr($class) . '"' : '';

    return "<img src=\"{$src}\" alt=\"{$alt_attr}\"{$class_attr} />";
}
