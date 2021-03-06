<?php

namespace App\Http\Controllers;
use App\Question;
use App\Reply;
use Response;
use App\Http\Resources\ReplyResource;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
       // return Reply::latest()->get();
    }

    public function store(Request $request)
    {
        //
        $reply = $question->replies()->create($request->all());
        return response([
            'reply' => new ReplyRecourse($reply),            
        ],
        Response::HTTP_CREATED
    );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question,Reply $reply)
    {
        return new ReplyRecourse ($reply);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response('Update',Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question,Reply $reply)
    {
        $reply->delete();
        //
        return response([
            'Deleted',
            Response::HTTP_NO_CONTENT
        ]);
    }
}
