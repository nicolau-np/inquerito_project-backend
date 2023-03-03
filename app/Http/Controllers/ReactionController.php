<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReactionComment;
use App\Models\ReactionType;
use App\Http\Resources\ReactionCommentResource;
use App\Http\Resources\ReactionTypeResource;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_reaction_type' => 'required|integer|exists:reaction_types,id',
            'id_comment' => 'required|integer|exists:comments,id',
        ], [], [
            'id_reaction_type' => 'Reaçao',
            'id_comment' => 'Comentário',
        ]);

        $reaction_comment = ReactionComment::create($request->all());
        return new ReactionCommentResource($reaction_comment);
    }

    public function types()
    {
        $types = ReactionType::all();
        return ReactionTypeResource::collection($types);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}