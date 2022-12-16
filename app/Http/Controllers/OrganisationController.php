<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
  public function index() {
    $categories = Category::all();
    $categories_id = request('cat_ids', []);
    $organisations = Organisation::when(!empty($category_ids), function ($q) {
      $q->whereHas('categories', function ($query) {
        $query->whereIn('id', request('cat_ids'));
      });
    })->with('categories')->get();

    return view('organisations.index')
    ->with('categories',$categories)
    ->with('categories_id',$categories_id)
    ->with('organisations',$organisations);
  }
  public function store(Request $request) {

    if(Organisation::create($request->all())) {
      return redirect()->back()->with('message', 'Organisation created succesfully');
    } else {
      return redirect()->back()->with('message', 'Failed to create Organisation');
    }
  }
  public function edit(Request $request, $id) {
    $organisation = Organisation::find($id);
    $update = [
      'legal_name' => request('legal_name'),
      'description' => request('description'),
      'source' => request('source'),
      'inn' => request('inn'),
      'location' => request('location'),
      'head_person_name' => request('head_person_name'),
    ];
    $old_file_name = null;
    if($request->hasFile('logo'))
    {
      $ext = $request->file('logo')->extension();
      $file_name = str_replace(' ', '_', $organisation->legal_name) . '_logo_' . time() . '.' . $ext;
      $update['logo'] = $request->file('logo')->storeAs('organisations/logo', $file_name, 'public');
      $old_file_name = $organisation->logo;
      $old_logo_path = storage_path('app/public/') . $old_file_name;
    }
    if($organisation->update($update))
    {
      if(!is_null($old_file_name) && file_exists($old_logo_path))
      {
        unlink($old_logo_path);
      }
      return redirect()->back()->with('message', 'Organisation ' . $organisation->legal_name . 'succesfully updated');
    }
    unlink(storage_path('app/public/').$file_name);
    return redirect()->back()->with('message', 'Can\'t update organisation ' . $organisation->legal_name);
  }
  public function destroy($id) {
    $organisation = Organisation::find($id)->delete();
    if($organisation)
    {
      return redirect()->back()->with('message', 'Organisation deleted');
    }
    return redirect()->back()->with('message', 'Can\'t delete organisation');
  }
  public function attach_category(Request $request, $id) {
    $organisation = Organisation::find($id);
    if($organisation->categories()->attach(request('category_id')))
    {
      return redirect()->back()->with('message', 'Category added succesfully');
    }
    return redirect()->back()->with('message', 'Failed to add category');
  }
  public function attach_category_api(Request $request) {
    $category_name = request('category_name');
    $organisation_id = request('organisation_id');
    $category = Category::firstOrCreate(['name' => $category_name]);
    $organisation = Organisation::with('categories')->findOrFail($organisation_id);
    $cats_ids = $organisation->categories->pluck('id')->toArray();
    $cats_ids[] = $category->id;
    if($organisation->categories()->sync($cats_ids))
    {
      return ['message' => 'Category added succesfully'];
    }
    return ['message' => 'Failed to add category'];
  }
  public function add_comment(Request $request)
  {
    $rate = ceil(request('rate'));
    if($rate > 5) {
      $rate = 5;
    }
    $comment = Comment::create([
      'text' => request('text'),
      'username' => request('username'),
      'rate' => $rate,
      'user_id' => request('user_id'),
      'organisation_id' => request('organisation_id'),
      'parent_comment_id' => request('parent_comment_id')
    ]);
    if(!empty($comment))
    {
      $rendered = view('organisations.components.comment', ['comment'=>$comment])->render();
      return ['message' => 'Comment successfully created', 'html' => $rendered];
    }
    return ['message' => 'Failed to create comment'];
  }
}
