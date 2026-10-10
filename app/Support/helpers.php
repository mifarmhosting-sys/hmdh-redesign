<?php

use App\Cms\Cms;

if (! function_exists('cms')) {
    /** cms('home.hero.title') -> editable text (or default). */
    function cms(string $key, ?string $fallback = null): ?string
    {
        return Cms::get($key, $fallback);
    }
}

if (! function_exists('cms_on')) {
    /** cms_on('home.offer.show') -> bool for toggle fields. */
    function cms_on(string $key): bool
    {
        return Cms::bool($key);
    }
}

if (! function_exists('cms_image')) {
    /** cms_image('home.hero.background') -> public URL of an uploaded/default image. */
    function cms_image(string $key): ?string
    {
        return Cms::image($key);
    }
}

if (! function_exists('cms_lines')) {
    /** cms_lines('home.search.trip_types') -> string[] */
    function cms_lines(string $key): array
    {
        return Cms::lines($key);
    }
}

if (! function_exists('cms_items')) {
    /** cms_items('home', 'story_cards') -> Collection of objects */
    function cms_items(string $page, string $list)
    {
        return Cms::items($page, $list);
    }
}
