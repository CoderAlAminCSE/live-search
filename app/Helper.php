<?php

use App\Models\Category;

function parentCategory($id){
    
    // $category = Category::where('parent_id', $id)->first();
    // if ($category->parent_id > 0) {
    //    return Category::findOrFail($category->id)->parent->name;
    // } else {
    //     return "No Parent";
    // }

   return Category::where('id', $id)->first()->name??"no parent";
    
}