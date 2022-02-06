<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoriesDropdowns extends Component
{


    /**
     * Get the view / contents that represent the component.
     *
     */
    public function render()
    {
        return view('components.categories-dropdowns',[
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))

        ]);
    }
}
