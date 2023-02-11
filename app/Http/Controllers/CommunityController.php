<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comments = Community::all();
        $comments = Community::orderBy('updated_at', 'desc')->get();

        return view('community.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:32',
            'subject' => 'required|min:3|max:32',
            'comment_message' => 'required|min:10|max:255',
        ]);

        $comments = Community::create($request->all());
        
        return redirect(route('community.index'))->with('success', 'Your comment was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Community::findOrFail($id);
        
        return view('community.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:32',
            'subject' => 'required|min:3|max:32',
            'comment_message' => 'required|min:10|max:255',
        ]);

        $comment = Community::findOrFail($id);

        $comment->update($request->all());

        // $comment->save();

        return redirect(route('community.index'))->with('editMessage', 'Your comment was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Community::findOrFail($id);

        $comment->delete();

        return redirect(route('community.index'))->with('deleteMessage', 'Your comment was successfully deleted');
    }
}
