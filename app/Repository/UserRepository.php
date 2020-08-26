<?php

namespace App\Repository;

use Illuminate\Http\Request;
use App\User;

class UserRepository {
    public function index(Request $request) {
        $campo = $request->has('campo') ? $request->campo : null;
        $valor =  $request->has('valor') ? $request->valor : null;

        $results = User::where(function ($query) use ($campo,$valor){
                            if ($campo && $valor) {
                                $query->where($campo, 'like', '%'.$valor.'%');
                            }
                            $query;
                        })
                        ->with('conta')
                        ->paginate(20);

        return response()->json($results);
    }
}
