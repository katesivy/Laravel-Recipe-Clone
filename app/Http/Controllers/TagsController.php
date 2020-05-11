<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index ()
    {
        return new Tags(Tag::all());
    }

    public function recipeIds ($recipe_id)
    {
        return Tag::where('recipe_id', $recipe_id)->get();
    }

    public function recipeTags ($tag_id)
    {
        return Tag::where('tag_id', $tag_id)->get();
    }
}
