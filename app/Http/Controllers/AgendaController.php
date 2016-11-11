<?php
/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 14:29
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index($letra = "nll")
    {
        $letras = $this->getLetras();

        if ($letra == "nll" && sizeof($letras)>0){
            $letra = $letras[0];
        }

        $pessoas = Pessoa::where('apelido', 'like', $letra.'%' )->get();

        return view('index',compact('pessoas'));
    }
    
    public function search($nome)
    {
        if($nome != ""){
            $pessoas = Pessoa::where('apelido', 'like', '%'.$nome.'%' )
                ->orWhere('nome', 'like', '%'.$nome.'%' )
                ->get();
        }

        return view('search',compact('pessoas'));
    }

    protected function getLetras()
    {
        $letras = [];
        foreach (Pessoa::all() as $pessoa){
            $letras[] = strtoupper(substr($pessoa->apelido,0,1));
        }
        sort($letras);

        return array_unique($letras);
    }
}