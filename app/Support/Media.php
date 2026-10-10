<?php

namespace App\Support;

class Media
{
    /**
     * Resolve a stored media path to a public URL.
     * Handles absolute URLs, files shipped in /public, and uploads on the storage disk.
     */
    public static function url(?string $path, ?string $fallback = null): ?string
    {
        if (!$path) {
            return $fallback ? asset($fallback) : null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (file_exists(public_path($path))) {
            return asset($path);
        }

        return asset('storage/' . $path);
    }
}
