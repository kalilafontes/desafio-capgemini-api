<?php

namespace App\Repository;

use Illuminate\Http\Request;
use App\Conta;

class ContaRepository {
    public function deposito(Request $request, $id)
    {
        $conta = Conta::findOrFail($id);
        $conta->increment('valor', $request->valor);

        return response()->json($conta);
    }

    public function saque(Request $request, $id)
    {
        $conta = Conta::findOrFail($id);
        if ($request->valor <= $conta->valor) {
            $conta->decrement('valor', $request->valor);
            return response()->json($conta);
        }
        return abort(500, 'Não há saldo disponível');
    }
}
