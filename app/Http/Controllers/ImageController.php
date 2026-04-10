<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImageController extends Controller
{
    /**
     * Serve image from storage
     */
    public function serve($disk = 'public', $path = '')
    {
        // Reconstruct the full path from the parameter
        $fullPath = $path;
        
        // Security: Prevent directory traversal attacks
        if (strpos($fullPath, '..') !== false) {
<<<<<<< HEAD
            abort(403, 'Forbidden');
        }
        
        if (!Storage::disk($disk)->exists($fullPath)) {
            abort(404, 'Image not found');
=======
            abort(403, 'Akses ditolak');
        }
        
        if (!Storage::disk($disk)->exists($fullPath)) {
            abort(404, 'Gambar tidak ditemukan');
>>>>>>> 4ec54b9e (update terbaru)
        }
        
        $file = Storage::disk($disk)->get($fullPath);
        $mimeType = Storage::disk($disk)->mimeType($fullPath);
        
        return response($file, 200)
            ->header('Content-Type', $mimeType)
            ->header('Cache-Control', 'public, max-age=31536000');
    }
}
