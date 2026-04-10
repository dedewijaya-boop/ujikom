<?php
namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'produit_id' => 'required|exists:products,id',
        'note' => 'required|integer|min:1|max:5',
        'commentaire' => 'required|string|max:1000',
    ]);

    // Check for existing review
    $existingReview = Review::where('user_id', auth()->id())
                          ->where('produit_id', $validated['produit_id'])
                          ->exists();

    if ($existingReview) {
        return back()->with('error', 'Vous avez déjà laissé un avis pour ce produit.');
    }

    try {
        Review::create([
            'produit_id' => $validated['produit_id'],
            'user_id' => auth()->id(),
            'note' => $validated['note'],
            'commentaire' => $validated['commentaire']
        ]);

<<<<<<< HEAD
        return back()->with('success', 'Merci pour votre avis!');
=======
        return back()->with('success', 'Terima kasih atas ulasan Anda!');
>>>>>>> 4ec54b9e (update terbaru)

    } catch (\Exception $e) {
        return back()->with('error', 'Une erreur est survenue: '.$e->getMessage());
    }
}
}