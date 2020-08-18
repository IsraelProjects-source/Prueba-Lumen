<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Http\Response; 


class PostController extends Controller
{
    public function shor($postId){
        return $postId;
    }
// ------ retornando con arreglo ---------------
    /*public function update(Request $request, $postId){
        return 
        [
            'Id' => $postId,
            'Title' => $request->input('title'),
            'Content' => $request->input('content')
        ];
    }*/

// -------- retornando usando Response ----------------
    public function update(Request $request, $postId){
        $content = 
        [
            'Id' => $postId,
            'Title' => $request->input('title'),
            'Content' => $request->input('content')
        ];

        return (new Response($content, 201));
    }
}
