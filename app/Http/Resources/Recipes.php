<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
// use App\Http\Resources\RecipesCollection;
//  use App\Http\Resources\Recipes;
//  use App\Recipes;

class Recipes extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
