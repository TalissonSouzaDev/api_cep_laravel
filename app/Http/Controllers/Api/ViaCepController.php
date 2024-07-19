<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCEP;
use App\Http\Resources\ViaCepResource;
use App\Http\services\ServiceAPICep;
use Illuminate\Http\Request;

class ViaCepController extends Controller
{
    protected $service;

    public function __construct(ServiceAPICep $Service)
    {
        $this->service = $Service;

    }
    public function ViaCep(RequestCEP $request) {
        $cep = !is_array($request->cep) ? explode(" ",$request->get("cep")) : $request->get("cep");
        $array_ceps = $this->service->VIACEP($cep);
        $cepcollection = collect($array_ceps)->sortByDesc('cep')->toArray();
        return ViaCepResource::collection($cepcollection)->response();
    }
}
