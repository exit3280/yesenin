<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Poem;
use App\Language;

class PoemController extends Controller
{

  protected $defaultLanguage = 'en_US';

  public function names(Request $request){
    $language = $request->input('language');
    $searchName = $request->input('search_name');
    if(!$language) { $language = $this->defaultLanguage; }
    $language = Language::where('iso_name', $language)->first();

    $query = Poem::query();
    if($searchName) { $query = $query->where('name', 'like', '%' . $searchName . '%'); }
    return $query->where('language_id', $language->id)->paginate(5, ['id', 'name']);
  }

  public function get_poem(Request $request){
    $id = intval($request->input('id'));
    return Poem::find($id);
  }

}
