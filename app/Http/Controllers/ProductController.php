<?php

namespace App\Http\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Validate;

class ProductController extends Controller
{
    public function singleProduct(Request $request)
    {
        return view('singleProduct');
    }
    public function addProduct(Request $req)
    {
        $product_id= [];
        $colors = DB::select("SELECT * FROM `colors`");
        $brand = DB::select("SELECT * FROM `brand`");
        $category = DB::select("SELECT * FROM `category`");
        $sizes = DB::select("SELECT * FROM `sizes`");
       
        //addProductProcess
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'name' => 'required',
                'price' => 'required|numeric',
                'description' => 'required',
                'category' => 'required',
                'brand' => 'required',
                'color' => 'required',
                'quantity' => 'required|integer',
                'shipping' => 'required',
                'size' => 'required',
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return response()->json(['errors' => $errors]);
            }



            $name = $req->input('name');
            $price = $req->input('price');
            $description = $req->input('description');
            $category_fm = $req->input('category');
            $brand_fm = $req->input('brand');
            $color = $req->input('color');
            $quantity = $req->input('quantity');
            $shipping = $req->input('shipping');
            $size = $req->input('size');

            try {
                $email = session()->get('user')->email;
                DB::insert("
                INSERT INTO 
                `product`(`email`,`product_name`,`product_description`,`product_price`,`product_quantity`,`shipping`,`category_id`,`brand_id`)
                VALUES ('" . $email . "','" . $name . "','" . $description . "','" . $price . "',
                '" . $quantity . "','" . $shipping . "','" . $category_fm . "','" . $brand_fm . "')
            ");
                $product = DB::select("SELECT * 
                FROM `product` 
                WHERE `product_name` = '$name' 
                AND `email` = '$email' 
                AND id = (SELECT MAX(id) FROM `product`)
                ");
                if($product){
                    $product_id = $product[0]->id;
                }
                try {
                    DB::insert("
                    INSERT INTO 
                    `product_has_color`(`product_id`,`color_id`)
                    VALUES ('" . $product_id. "','" . $color . "')");
                    DB::insert("
                    INSERT INTO `product_has_size`(`product_id`,`size_id`) 
                    VALUES ('32','" . $size . "')");
                    $files = $req->file('file');
                    for ($i = 0; $i < 3; $i++) {
                        if ($files[$i] != null) {
                            $file = $files[$i];
                            $filleExt = $file->getClientOriginalExtension();
                            $fileName = $email."_".uniqid()."_".$name.".".$filleExt;
                            $file->move('img/product', $fileName);
                            try {
                                DB::insert("
                                    INSERT INTO 
                                    `product_images`(`product_id`,`product_image`)
                                    VALUES ('" . $product_id . "','" . $file->getClientOriginalName() . "')");
                            } catch (\Exception $e) {
                                return response()->json(['errorsdbInsert product_image' => $e->getMessage()]);
                            }
                        }
                    }
                } catch (\Exception $e) {
                    return response()->json(['errorsdbInsert product_has_color' => $e->getMessage()]);
                }
            } catch (\Exception $exception) {
                return response()->json(['errorsdbInsert product' => $exception->getMessage()]);
            }

            return response()->json(['success' => 'Product added successfully']);
            // Process the data further as needed
        }



        return view('addProduct', ['colors' => $colors, 'brands' => $brand, 'categories' => $category, 'sizes' => $sizes]);
    }



    public function inventory(Request $request)
    {
        return view('productInventory');
    }
}