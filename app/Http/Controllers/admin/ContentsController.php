<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\Content;
use App\Http\Model\Files;

class ContentsController extends Controller
{
   
    public function index()
    {
        return view('admin.content.index');
    }

  
    public function create()
    {
        return view("admin.content.create");
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $content = new Content;
        $content->setData($content, $request->all());

        try{
            if(!$request->video){

                $files = new Files; 
                $files->upload($files, $request->image);
                $content->file_id = $files->id;  
            }
            
            $content->save();

        }catch(Exception $e){
            return redirect()->back()->with('error', 'Ocorreu um erro ao cadatrar o conteúdo. Por favor entre em contato com suporte!');

        }
        
        return redirect()->route('admin.conteudo.index')->with('success', 'Conteúdo cadastrado com sucesso!');        
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('admin.content.edit', ['content' => Content::findOrFail($id)]);
    }

    
    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        $content->setData($content, $request->all());

        try{
            if(isset($request->image) && !$request->video){

                $files = new Files; 
                $files->upload($files, $request->image);
                $content->file_id = $files->id;  
            }

            $content->save();

        }catch(Exception $e){
            return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o conteúdo. Por favor entre em contato com suporte!');

        }finally{
            return redirect()->route('admin.conteudo.index')->with('success', 'Conteúdo atualizado com sucesso!');

        }
    }

   
    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();
        return redirect()->route('admin.conteudo.index')->with('success', 'Conteúdo apagado com sucesso!');

    }
}
