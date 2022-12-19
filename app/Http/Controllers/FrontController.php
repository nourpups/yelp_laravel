<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Organisation;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function landing() {
      return view('landing');
    }
    public function index_organisation() {
    $organisations = Organisation::with('categories')->paginate(3);
    $categories = Category::all();
    return view('organisations.app_index',
    [
      'organisations' => $organisations,
     'categories' => $categories
    ]);
    }
    public function page_organisation($id)
    {
        $organisation = Organisation::with(['categories', 'comments', 'suggestion_comments'])->find($id);
        return view('organisations.app_page', [
            'organisation' => $organisation,
        ]);
    }

}
