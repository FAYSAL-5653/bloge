<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogrController extends Controller
{public function allbloge()
    {
    return view('index');
}
    public function index()
    {
        $res = DB::table('bloge')->get();
        return view('page.bloge', compact('res'));
    }

    public function bloge()
    {
        return view('component.blogeFrom');
    }
    /**
     * Summary of blogestore
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    public function blogestore(Request $request)
    {
        return DB::table('bloge')->insert([
            "title" => $request->title,
            "author" => $request->author,
            "content" => $request->content,
        ]);
    }

    public function indexComment()
    {
        $returnColumn = DB::table('public_comment')->get();
        return view('page.bloge', compact('returnColumn'));
    }

    public function comment()
    {
        return view('component.commentFrom');

    }
    public function commentStore($request)
    {
        return DB::table('public_comment')->insert([
            "name" => "$request->name",
            "comment" => "$request->comment",
        ]);

    }

}
