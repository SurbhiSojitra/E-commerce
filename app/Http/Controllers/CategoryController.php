<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => False,
                'message' => $validator->errors()->first(),
            ]);
        }

        $category = Category::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => True,
            'message' => 'Category Created Successfully',
            'Category' => $category,
        ]);
    }

    public function updateCategory(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:categories,id',
            'name' => 'required|string',
        ]);

        $category = Category::findOrFail($validated['id']);

        $category->update([
            'name' => $validated['name'],
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Category updated',
            'category' => $category,
        ]);
    }

    public function allCategory()
    {
        return response()->json([
            'status' => True,
            'message' => 'All Categories',
            'Categories' => Category::all(),
        ]);
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);

        return response()->json([
            'status' => True,
            'message' => 'Category Deleted Successfully!'
        ]);
    }
}
