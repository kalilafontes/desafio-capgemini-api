<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;
use App\Repository\ContaRepository;

class ContaController extends Controller
{
    protected $contaRepository;

    public function __construct()
    {
      $this->contaRepository = new ContaRepository();
    }

    public function deposito(Request $request, $id)
    {
        $results = $this->contaRepository->deposito($request, $id);
        return $results;
    }

    public function saque(Request $request, $id)
    {
        $results = $this->contaRepository->saque($request, $id);
        return $results;
    }
}
