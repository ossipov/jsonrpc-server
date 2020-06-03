<?php namespace App\Http\Controllers\JsonRpc;

use \Tochka\JsonRpc\Traits\JsonRpcController;
use App\Page;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
  // use JsonRpcController;

  public function getPages() {
    return Page::select('title','page_uid')->get()->pluck('title','page_uid');
  }

  public function getPage($page_uid) {
    return Page::select('title','description')->where('page_uid',$page_uid)->first();
  }

  public function updPage($page_title, $page_description, $page_uid) {

    $page = Page::where('page_uid', $page_uid)->update([
      'title' => $page_title,
      'description' => $page_description,
    ]);
    
    if (!$page) abort(404);

    return [
      'page_title' => $page_title,
      'page_description' => $page_description,
    ];
  }
}