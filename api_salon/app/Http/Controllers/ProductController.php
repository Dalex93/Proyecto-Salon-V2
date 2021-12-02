<?php

namespace App\Http\Controllers;

use App\Http\Requests\Productos\CreateProduct;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductSingleResource;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        $productosQuery = Product::with('category', 'supplier')->get();
        
        $productos = ProductResource::collection( $productosQuery );

        return response($productos, Response::HTTP_OK);
    }

    public function store(CreateProduct $request)
    {
        $product = Product::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'price'       => $request->input('price'),
            'mark'        => $request->input('mark'),
            'category_id' => $request->input('categoryId'),
            'supplier_id' => $request->input('supplierId') 
        ]);

        Inventory::create([
            'quantity_available' => 1,
            'product_id'         => $product->id
        ]);

        return (new ProductSingleResource($product))->additional([
            'mensaje' => 'Producto agregado exitosamente' 
        ]);
    }

    public function show(Product $product)
    {
        $producto = new ProductSingleResource($product);
        return response($producto, Response::HTTP_OK);
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'name'        => $request->input('name', $product->name),
            'description' => $request->input('description', $product->description),
            'price'       => $request->input('price', $product->price),
            'mark'        => $request->input('mark', $product->mark),
            'category_id' => $request->input('categoryId', $product->category_id),
            'supplier_id' => $request->input('supplierId', $product->supplier_id) 
        ]);
        
        return (new ProductSingleResource($product))->additional([
            'mensaje' => 'El producto ' . $product->name . ' ha sido actualizada' 
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete(); 

        return (new ProductSingleResource($product))->additional([
            'mensaje' => 'El producto ' . $product->name . ' ha sido eliminado' 
        ]);
    }
}
