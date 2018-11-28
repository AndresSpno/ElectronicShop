<?php

namespace Tienda\Http\Controllers;

use Illuminate\Http\Request;
use Tienda\Product;
use Tienda\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;


class ProductController extends Controller
{    
	public function index()
	{
		$products = Product::orderBy('id', 'DESC')->simplePaginate(5);
		return view('products.index', compact('products'));
	}

	public function create()
	{
		return view('products.create');
	}

	public function store(ProductRequest $request)
	{
		$product = new Product;

		$product->name = $request->name;
		$product->short = $request->short;
		$product->body = $request->body;

		if ($request-> hasFile('image')) {
            $product->image = $request-> file('image')-> store('public');

            
        }

        $product->save();



		// //IMAGE
		// if ($request->file('file')) {
		// 	$path = Storage::disk('public')->put('image', $request->file('file'));
		// 	$product->fill(['file' => asset($path)])->save();
		// }

		//TAGS

		// $product->tags()->attach($request->get('tags'));

		return redirect()->route('products.index')
						->with('info', 'El producto fue guardado correctamente');
	}


	public function edit($id)
	{
		$product = Product::find($id);
		return view('products.edit', compact('product'));
	}

	public function update(ProductRequest $request, $id)
	{
		$product = Product::find($id);

		$product->name = $request->name;
		$product->short = $request->short;
		$product->body = $request->body;

		if ($request-> hasFile('image')) {
        $product->image = $request-> file('image')-> store('public');
        }
        $product->save();

		//IMAGE
		// if ($request->file('file')) {
		// 	$path = Storage::disk('public')->put('image', $request->file('file'));
		// 	$product->fill(['file' => asset($path)])->save();
		// }

		//TAGS

		// $product->tags()->sync($request->get('tags'));

		return redirect()->route('products.index')
						->with('info', 'El producto fue actualizado correctamente');
	}

	
	public function show($id)
	{
		$product = Product::find($id);
		return view('products.show', compact('product'));
	}

	public function pdf()
    {        
        
        $products = Product::all(); 

        $pdf = PDF::loadView('pdf.products', compact('products'));

        return $pdf->download('listado.pdf');
    }

	public function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();

		return back()->with('info', 'El producto fue eliminado correctamente');

	}
}
