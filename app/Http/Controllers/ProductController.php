<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function women()
    {
        return view('women');
    }

    public function productList($category, $subcategory, $tag)
    {
        // category
        $category = Category::where('name', ucfirst($category))->firstOrFail();

        // subcategory 
        $subcategory = SubCategory::where('name', ucfirst($subcategory))
            ->where('category_id', $category->id)
            ->firstOrFail();

        // tag
        $tag = Tag::where('name', str_replace('-', ' ', ucfirst($tag)))
            ->firstOrFail();

        $products = Product::where('category_id', $category->id)
            ->where('sub_category_id', $subcategory->id)
            ->where('tag_id', $tag->id)
            ->get();

        return view('products_list', compact(
            'products',
            'category',
            'subcategory',
            'tag'
        ));
    }

    public function productListBySubCategory($category, $subcategory)
    {
        // Category
        $category = Category::where('name', ucfirst($category))->firstOrFail();

        // SubCategory
        $subcategory = SubCategory::where('name', ucfirst($subcategory))
            ->where('category_id', $category->id)
            ->firstOrFail();

        //category + subcategory
        $products = Product::where('category_id', $category->id)
            ->where('sub_category_id', $subcategory->id)
            ->get();

        return view('products_list', compact(
            'products',
            'category',
            'subcategory'
        ));
    }


    public function men()
    {
        return view('men');
    }

    public function kids()
    {
        return view('kids');
    }

    public function home_kitchen()
    {
        return view('home_kitchen');
    }
}
