<?php
/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 14:29
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function delete($id)
    {
        $telefone = Telefone::find($id);

        $pessoa = $telefone->pessoa;

        return view('telefone.delete', compact('telefone', 'pessoa'));
    }

    public function destroy($id)
    {
        Telefone::find($id)->delete();
        return redirect()->route('agenda.index');
    }

}