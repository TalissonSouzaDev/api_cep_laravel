<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class ViaCepResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

       /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'cep' => str_replace(array('.','-','/'), "", $this->resource['cep']) ?? "Não encontrado",
            'label' => implode(', ', [$this->resource['logradouro'] ?? "Não encontrado", $this->resource['localidade'] ?? "Não encontrado"]),
            'complemento' => $this->resource['complemento'] ?? "Não encontrado",
            'bairro' => $this->resource['bairro'] ?? "Não encontrado",
            'localidade' => $this->resource['localidade'] ?? "Não encontrado",
            'uf' => $this->resource['uf'] ?? "Não encontrado",
            'ibge' => $this->resource['ibge'] ?? "Não encontrado",
            'gia' => $this->resource['gia'] ?? "Não encontrado",
            'ddd' => $this->resource['ddd'] ?? "Não encontrado",
            'siafi' => $this->resource['siafi'] ?? "Não encontrado",
        ];
    }
}
