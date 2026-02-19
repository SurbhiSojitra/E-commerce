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
        $womenCategory = Category::where('name', 'Women')->first();
        $menCategory = Category::where('name', 'men')->first();
        $kidsCategory = Category::where('name', 'kids')->first();
        $homeKitchenCategory = Category::where('name', 'home_kitchen')->first();

        $womenSubCategories = SubCategory::where('category_id', $womenCategory?->id)->latest()->get();

        $menSubCategories = SubCategory::where('category_id', $menCategory?->id)->latest()->get();

        $kidsSubCategories = SubCategory::where('category_id', $kidsCategory?->id)->latest()->get();

        $homeKitchenSubCategories = SubCategory::where('category_id', $homeKitchenCategory?->id)->latest()->get();

        return view('home', compact('womenSubCategories', 'menSubCategories', 'kidsSubCategories', 'homeKitchenSubCategories'));
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
