<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class Messages extends Controller
{
    public function index($categoria = null){

        if ($categoria == null){
            $messages = Message::all();
        }else{
            $messages = Message::where('categoria', $categoria ?? null)->get();
        }

        return view('welcome',['messages'=>$messages]);
    }

    public function new(){

        return view('messages.new',[]);
    }

    public function store(Request $request){
        $message = new Message;
        $message->categoria = $request->categoria;
        $message->titulo = $request->titulo;
        $message->mensagem = $request->mensagem;
        $message->autor = $request->autor;      

        $message->save();

        return redirect('/')->with('msg','Registro salvo com sucesso.');

    }
}
