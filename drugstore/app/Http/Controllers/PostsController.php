<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Database\Eloquent\Collection;
/**
  * Gera a paginação dos itens de um array ou collection.
  *
  * @param array|Collection      $items
  * @param int   $perPage
  * @param int  $page
  * @param array $options
  *
  * @return LengthAwarePaginator
  */
class PostsController extends Controller
{
    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (PaginationPaginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
    public function index(Request $request){
        $posts= Posts::all()->paginate(10);
        return view('layouts.posts.index',compact('posts'));
    }
    public function manager(){
        $posts= Posts::all()->paginate(10);
        return view('layouts.admin.manager-post-page',compact('posts'));
    }
    public function create(){
        $posts= Posts::all();
        return view('layouts.admin.create-post-page',compact('posts'));
    }

    public function store(CreatePostRequest $request){
        $ImgForShowing=$request->file('thumbnail');
        if($request->file('thumbnail') != ''){
            $path='post_img';
            $file_name=$ImgForShowing->getClientOriginalName();
            $ImgForShowing->storeAs('',$ImgForShowing->getClientOriginalName(),'postImg');
        }
        else{
            $file_name='';
        }
        DB::table('posts')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'path'=>'post_img',
            'file_name'=>$file_name,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        return redirect('quan-ly-bai-viet');
    }

    public function edit(Posts $posts){
        return view('layouts.admin.edit-post-page',compact('posts'));
    }

    public function update(CreatePostRequest $request, Posts $posts){
        $ImgForShowing=$request->file('thumbnail');
        if($request->file('thumbnail') != ''){
            $posts->path='post_img';
            $posts->file_name=$ImgForShowing->getClientOriginalName();
            $posts->save();
            $ImgForShowing->storeAs('',$ImgForShowing->getClientOriginalName(),'postImg');
        }
        $data=[
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'updated_at'=>Carbon::now()

        ];

        $posts->update($data);
        return back()->withInput();
    }

    public function delete($id){
        Posts::destroy($id);
        return redirect('');
    }
    public function content(Posts $posts){

        return view('layouts.posts.content',compact('posts'));
    }
}
