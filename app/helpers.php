<?php

if (!function_exists('image_url')) {
    /**
     * Generate URL for a product image
     * 
     * @param string|null $path The image path from database
     * @return string The public URL to the image
     */
    function image_url($path = null)
    {
        if (empty($path)) {
            return asset('images/placeholder.jpg');
        }

        // Try using the storage route for more reliable access
        return route('image.serve', ['disk' => 'public', 'path' => $path]);
    }
}

if (!function_exists('storage_url')) {
    /**
     * Generate URL for any file in storage
     * 
     * @param string $path The file path (relative to storage/app/public)
     * @return string The public URL to the file
     */
    function storage_url($path)
    {
        return route('image.serve', ['disk' => 'public', 'path' => $path]);
    }
}

if (!function_exists('rupiah')) {
    /**
     * Format number as Indonesian Rupiah currency.
     *
     * @param float|int|null $value
     * @param int $decimals
     * @return string
     */
    function rupiah($value, $decimals = 0)
    {
        $value = $value ?? 0;
        return 'Rp ' . number_format($value, $decimals, ',', '.');
    }
}
