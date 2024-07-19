<?php

namespace App\Http\services;

use Illuminate\Support\Facades\Http;

class ServiceAPICep {


    public function VIACEP(array $cep): array {
        $array_ceps = [];
        foreach($cep as $ceps) {
             $str_cep = str_replace(array('.','-','/'), "", $ceps);
                $url = "viacep.com.br/ws/$str_cep/json/";
                $response = Http::get($url);
                $responseJson = $response->json();
            try {
                $verifyJson = $responseJson == null ? ["cep" => $ceps, "error" => "CEP " .$str_cep." não encontrado"] : $responseJson;
                array_push($array_ceps, $verifyJson);
            }
            catch (\Exception $e) {
                array_push($array_ceps, ["cep" => $ceps, "error" => "CEP " .$str_cep." não encontrado"]);
                continue;
            }
        }
        return $array_ceps;

    }
}
