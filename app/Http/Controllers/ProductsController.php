<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Product;
use App\Http\Requests;

class ProductsController extends Controller
{
    /**
     * @var
     */
    private $upload_dir;

    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
        $this->upload_dir = base_path() . '/public/uploads';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('admin.products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules($request));
        $data = $this->getRequest($request);
        Product::create($data);
        flash()->success('Product was successfully added !!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules($request));

        $product = Product::findOrFail($id);
        $product->save($request->all());

        flash()->success('Product Successfully Updated !');

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Traitement pour supprimer produit + fichier
        /*if ( ! is_null($product->img)) {
            $file_path = $this->upload_dir . '/' . $product->img;
            if (file_exists($file_path)) unlink($file_path);
        }

        $product->delete();*/

        $product->qty = 0;

        $product->save();

        flash()->error('Product No longer Available !');

        return redirect()->route('admin.products.index');
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function getRequest(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            // Get file name
            $photo = $request->file('img')->getClientOriginalName();
            // Move file to server
            $destination = $this->upload_dir;
            $request->file('img')->move($destination, $photo);

            $data['img'] = $photo;
        }

        return $data;
    }

    public function rules(Request $request)
    {
        if ($request->has('code')) {
            return $rules = [
                'code' => ['required', 'min:5'],
                'title' => ['required', 'min:5'],
                'price' => ['required', 'numeric'],
                'description' => ['required', 'min:10'],
                'qty' => ['required', 'numeric', 'digits_between:1,3'],
                'img' => ['mimes:jpeg,jgp,bmp,png'],
                'category_id' => ['required', 'exists:categories,id']
            ];
        }
        return null;
    }

}
