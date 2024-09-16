<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::get();
        return view('admin/admen',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'nullable',
            'price' => 'required|numeric',
            'img'      => 'nullable|image|mimes:png,jpg'
        ]);

        // Validator::make([data],[rule],[message])
        $validator = Validator::make($request->all(),
        [
           'product_name' => 'required|string|max:50',
            'price' => 'required|numeric',
            'image'      => 'nullable|image|mimes:png,jpg'
        ],
        [
            'required' => 'الرجاء ملئ الحقل',
            'numeric'  => 'الرجاء إدخال رقم حصراً',
            'name.required' => 'الرجاء إدخال اسم المنتج!',
        ]);
        $product = new product();
        $product->product_name = $request->name;
           $product->brand_id=$request->brand;
         $product->category_id = $request->cat;
          $product->price = $request->price;
           $product->size= $request->size;
          $product->color = $request->color;
           $product->product_count = $request->number;

           $image = $request->file('image');
           $destinationPath  = 'images/products';
           $productImage     = 'product_'.date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move(public_path($destinationPath), $productImage);
           $product->img = "$productImage";

            $product->save();
            return redirect()->route('product.store')->with('success','Product created successfully.');

     //   return redirect()->route('admin.store')->with('success','Product is failed to be created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id=='4')
        {
            $product = Product::all();
            return view('user.shop',compact('product'));
        }
        else{
        $product = Product::where('category_id',$id)->get();
        return view('user.shop',compact('product'));
         }
    }
    public function showStatistic()
    {
        return view('admin.statistic');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $product = Product::findorfail($id);
        return view('admin.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'nullable',
            'price' => 'required|numeric',
            'img'      => 'nullable'
        ]);
       $product=product::findorFail($id);
        $product->product_name = $request->name;
           $product->brand_id=$request->brand;
         $product->category_id = $request->cat;
          $product->price = $request->price;
           $product->size= $request->size;
          $product->color = $request->color;
           $product->product_count = $request->number;
           $image = $request->file('image');
           $destinationPath='images/products';
           $productImage= 'product_'.date('YmdHis')."." .$image->getClientOriginalExtension();
           $image->move(public_path($destinationPath), $productImage);
           $product->img ="$productImage";

        $product->save();
       // $product->save($request->all());

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
       /* product::destroy($product->id);
        return redirect()->route('product.index');*/
        product::withTrashed()->where('id',$product->id)->delete();
        return  redirect()->back();
    }



public function filter(Request $request)
    {

        $query = Product::query();

        // استخراج البيانات من الطلب
        $color = $request->input('color');
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');
        $size = $request->input('size');
        $category_id = $request->segment(2);

        // إضافة شروط البحث بين اللون والحجم والسعر الأدنى والسعر الأقصى مع مراعاة القيم الفارغة
        $query->when(!empty($color), function ($q) use ($color) {
            return $q->where('color', $color);
        });

        $query->when(!empty($size), function ($q) use ($size) {
            return $q->where('size', $size);
        });

        $query->when(!empty($min_price), function ($q) use ($min_price) {
            return $q->where('price', '>=', $min_price);
        });

        $query->when(!empty($max_price), function ($q) use ($max_price) {
            return $q->where('price', '<=', $max_price);
        });


        // جلب المنتجات بناءً على شروط البحث
        $product = $query->get();

        return view('user.filter', compact('product'));
}
}


