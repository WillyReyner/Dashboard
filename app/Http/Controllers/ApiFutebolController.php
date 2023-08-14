<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiFutebolController extends Controller
{
    private $apiKey = 'live_51e9b744d174f6321532d3c18e8f04';
    private $baseUrl = 'https://api.api-futebol.com.br/v1/';

    public function campeonatos()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . 'campeonatos');

        $campeonatos = $response->json();

        return view('bolao.campeonatos', compact('campeonatos'));
    }

    public function campeonato($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}");

        $campeonato = $response->json();

        return view('bolao.campeonato', compact('campeonato'));
    }

    public function tabela($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/tabela");

        $tabela = $response->json();

        return view('bolao.tabela', compact('tabela'));
    }

    public function artilharia($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/artilharia");

        $artilharia = $response->json();

        return view('bolao.artilharia', compact('artilharia'));
    }

    public function fases($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/fases");

        $fases = $response->json();

        return view('bolao.fases', compact('fases'));
    }

    public function fase($campeonato_id, $fase_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/fases/{$fase_id}");

        $fase = $response->json();

        return view('bolao.fase', compact('fase'));
    }

    public function rodadas($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/rodadas");

        $rodadas = $response->json();

        return view('bolao.rodadas', compact('rodadas'));
    }

    public function partidasAoVivo()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . 'ao-vivo');

        $responseData = $response->json();

        // Verificar se a resposta é um array associativo
        if (is_array($responseData)) {
            $partidasAoVivo = $responseData;
        } else {
            // Tratar como array vazio caso não seja um array associativo
            $partidasAoVivo = [];
        }

        return view('bolao.aovivo', ['partidasAoVivo' => $partidasAoVivo]);
    }


    public function partidasPorCampeonato($campeonato_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "campeonatos/{$campeonato_id}/partidas");

        $partidas = $response->json();

        return view('bolao.partidas_campeonato', compact('partidas'));
    }

    public function detalhesPartida($partida_id)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . "partidas/{$partida_id}");

        $detalhesPartida = $response->json();

        return view('bolao.detalhes_partida', compact('detalhesPartida'));
    }
}
