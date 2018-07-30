<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $cursos = Course::all();
        return view('curso.listarcursos',array('cursos' => $cursos,'buscar'=> ""));
    }

    public function show($id){
        $curso = Course::find($id);
        return view('curso.curso',array('curso' => $curso));
    }

    public function busca(Request $request){
        //Busca através do titulo do curso ou da categoria que ele está
        $buscaInput = $request->input('busca');
        $cursos = Course::where('title','LIKE','%'.$buscaInput.'%')
                                ->orwhere('category','LIKE','%'.$buscaInput.'%')
                                ->get();
        return view('curso.listarcursos',array('cursos' => $cursos,'buscar'=>$buscaInput));
    }
  
}
