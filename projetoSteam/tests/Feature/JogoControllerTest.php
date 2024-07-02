<?php

namespace Tests\Feature;

use App\Models\Genero;
use App\Models\Jogo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JogoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testShowViewDisplaysGenre()
    {
        $genero = Genero::factory()->create();
        $jogo = Jogo::factory()->create(['genero_id' => $genero->id]);

        $response = $this->get(route('jogos.show', $jogo));
        $response->assertSee($genero->nome);
    }

    public function testEditViewAllowsGenreUpdate()
    {
        $genero = Genero::factory()->create();
        $jogo = Jogo::factory()->create(['genero_id' => $genero->id]);
        $newGenero = Genero::factory()->create();

        $response = $this->get(route('jogos.edit', $jogo));
        $response->assertSee($genero->nome);

        $response = $this->put(route('jogos.update', $jogo), [
            'genero_id' => $newGenero->id,
            // Add other necessary fields
        ]);

        $jogo->refresh();
        $this->assertEquals($newGenero->id, $jogo->genero_id);
    }
}
