<?php

namespace Tests\Feature\API;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViaCepControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_validation(){
        $response = $this->getJson("/api/search/local/");
        $response->assertStatus(422);
    }

    public function test_ViaCepController_primeira_possibilidade() {
        $response = $this->getJson('/api/search/local/?cep=01001000+17560-246');
        $response->assertStatus(200);
        
    }
    public function test_ViaCepController_segunda_possibilidade() {
        $response = $this->getJson('/api/search/local/?cep[]=01001000&cep[]=17560-246');
        $response->assertStatus(200);
    }
}
