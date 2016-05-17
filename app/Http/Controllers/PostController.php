<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Listar os Posts do Blog
     */
    public function index()
    {
        //
        $posts = [
        	0 => [	
        		'id' 		=> 1,
        		'titulo' 	=> "O homem deve explorar, e esta é a exploração", 
        		'conteudo'	=> "Problems look mighty small from 150 miles up",
        		'autor'		=> "Steave",
        		'created'	=> "05 de Janeiro, 2016"
        	],
        	1 => [	
        		'id' 		=> 1,
        		'titulo' 	=> "O que foi mais significativa sobre a viagem lunar", 
        		'conteudo'	=> "Não foi que pôs os pés homem na Lua, mas que eles definir olho na terra",
        		'autor'		=> "João",
        		'created'	=> "15 de Março, 2016"
        	], 
        	2 => [	
        		'id' 		=> 1,
        		'titulo' 	=> "Alcançando as estrelas", 
        		'conteudo'	=> "Além da imaginação",
        		'autor'		=> "Gabriel",
        		'created'	=> "11 de Abril, 2016"
        	] 
        ];
         return view('post.index', compact('posts'));
        
    }
    
   
}
