<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    public function createProduct()
    {
        return view('product.create');
    }

    public function storeProduct(CreateProductRequest $request)
    {
        //for test page:
        // return $request->all();
        //for store our forms in database:
        Product::create([
//           $request->all()
            'title' => $request->title,
            'price' => $request->price,
            'total_count' => $request->total_count,
            'category' => $request->category,
            'description' => $request->description,
        ]);
        return redirect()->route('product.index');
    }
    public function productList()
    {
        $products = Product::select('id','title','price','total_count','is_active','category','created_at')
//            ->where('is_active',1)
            ->get();
        return view('product.index', compact('products'));
    }
    public function productDetail($id)
    {
        $product = Product::find($id);
        if ($product)
//            return $product;
            return view('product.detail', compact('product'));
        else return 'Does not exist!';
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function productUpdate(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'total_count' => $request->total_count,
            'category' => $request->category,
            'description' => $request->description,
        ]);
        return redirect()->route('product.index');
    }

    public function productDelete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }
    public function productActivation($id)
    {
        $product = Product::find($id);
//        $activeValue = $product->is_active ? 0 : 1;
        $product->update([
                'is_active' => $product->is_active ? 0 : 1
            ]);
        return redirect()->route('product.index');
    }
}
