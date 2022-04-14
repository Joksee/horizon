<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = DB::table('categories')->get(); 
        //$categories = Category::all();
        //return dd($categories);
        return view('Site.Category.Index', 
        ['categories' => Category::all()] //criar as páginas decontrole e acesso as tabelas
    );
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

        //return dd($category->load('products'));
        return view('site.category.show', ['category' => $category->load('products')]);
    }

}
