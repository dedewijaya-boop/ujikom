<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
{
    $products = Product::with('category:id,nom')
        ->select('id', 'nom', 'description', 'prix', 'image', 'category_id')
        ->latest()
        ->paginate(10);

    return view('admin.products.index', compact('products'));
}


public function create()
{
    $categories = Category::select('id', 'nom')->get();
    return view('admin.products.create', compact('categories'));
}

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'nom'),
            ],
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating'=> 'numeric',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')
<<<<<<< HEAD
                         ->with('success', 'Product created successfully.');
=======
                         ->with('success', 'Produk berhasil ditambahkan.');
>>>>>>> 4ec54b9e (update terbaru)
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nom' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'nom')->ignore($product->id),
            ],
            'description' => 'required|string',
            'prix' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating'=> 'numeric',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('admin.products.index')
<<<<<<< HEAD
                         ->with('success', 'Product updated successfully.');
=======
                         ->with('success', 'Produk berhasil diperbarui.');
>>>>>>> 4ec54b9e (update terbaru)
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->orderItems()->exists()) {
            return redirect()->route('admin.products.index')
                ->with('error', 'Produk ini tidak dapat dihapus karena sudah ada di pesanan.');
        }

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')
<<<<<<< HEAD
                         ->with('success', 'Product deleted successfully.');
=======
                         ->with('success', 'Produk berhasil dihapus.');
>>>>>>> 4ec54b9e (update terbaru)
    }
}