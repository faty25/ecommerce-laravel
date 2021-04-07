<?php
/**      */
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Category;
class HeaderComposer
{
    public function compose(View $view) {

        $matches = ['is_online'=>1,'parent_id'=>null];
        $view->with('categories',Category::where($matches)->get());
    }
}

