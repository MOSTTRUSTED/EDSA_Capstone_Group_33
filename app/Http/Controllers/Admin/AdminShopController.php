<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Items;
use Intervention\Image\Facades\Image;

class AdminShopController extends Controller

{
    public function index()
    {
        $categories = Category::all();
        $items = Items::all();
        return view('admin.shop.index', compact('categories', 'items'));
    }

    public function addCategory(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|unique:categories|max:255',
        // ]);

        Category::create(['name' => $request->name, 'description'=>$request->description]);
        return redirect('admin/shop/index')->with('success', 'Category added successfully.');
    }

    public function addItem(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            if ($request->hasFile('product_image')) {
                $image_tmp = $request->file('product_image');
                if ($image_tmp->isValid()) {
                    // get extention
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate new image name

                    $imageName = rand(111, 99999) . '.' . $extension;
                    $imagePath = 'admin/public/' . $imageName;
                    //upload image
                    Image::make($image_tmp)->save($imagePath);
                }
            }


        Items::create([
            'category_id' => $request->category_id,
            'vendor_id' => $request->vendor_id,
            'product_name' => $request->product_name,
            'product_discount' => $request->product_discount,
            'product_image' => $request->product_image,
            'description' => $request->description,
            'product_price' => $request->product_price,
            'is_featured' => $request->has('is_featured'),
            'status' => $request->status,
        ]);

        return redirect('admin/shop/index')->with('success', 'Item added successfully.');
    }
}
}
