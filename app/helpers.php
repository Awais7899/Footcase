<?php

use App\Models\Brand;
use App\Models\Category;

if (!function_exists('categoriesData')) {
    function categoriesData()
    {
        $categories = Category::with('sub_categories')->get();
        return $categories;
    }
}

if (!function_exists('brandsData')) {
    function brandsData()
    {
        $brands = Brand::all();
        return $brands;
    }
}
