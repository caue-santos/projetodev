<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarvelAPIController extends Controller
{
    private $privateKey;
    private $publicKey;

    const API_URL = 'https://gateway.marvel.com:443/v1/public/';
    /*
    * a URL da API é sempre a mesma, o que muda é depois do /
    */

    public function __construct()
    {
        $this->publicKey = env('PUBLIC_KEY_API', '');
        $this->privateKey = env('PRIVATE_KEY_API', '');
    }

    public function buscaHeroi($heroi)
    {
        $time = time();
        $hash = md5(time().$this->privateKey.$this->publicKey);
        $dadosBusca = self::API_URL.'characters?nameStartsWith='.$heroi.'&orderBy=name&limit=1&apikey='.$this->publicKey."&ts=".$time.'&hash='.$hash;
        
        $curlOptions = [
            CURLOPT_URL => $dadosBusca,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_FORBID_REUSE => true,
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);
        $result = curl_exec($curl);
        
        return json_decode($result, true);

    }

    public function storieById($id)
    {
        $time = time();
        $hash = md5(time().$this->privateKey.$this->publicKey);
        $search = self::API_URL.'stories/'.$id.'/'.'comics?apikey='.$this->publicKey.'&ts='.$time.'&hash='.$hash;
        
        $curlOptions = [
            CURLOPT_URL => $search,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_FORBID_REUSE => true,
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);
        $result = curl_exec($curl);
        
        $retorno = json_decode($result, true);

        return $retorno['data']['results'];
    }

    public function buscaHistoriasChar($id)
    {
        $time = time();
        $hash = md5(time().$this->privateKey.$this->publicKey);
        $search = self::API_URL.'characters/'.$id.'/stories?orderBy=id&limit=5&apikey='.$this->publicKey."&ts=".$time.'&hash='.$hash;
        
        $curlOptions = [
            CURLOPT_URL => $search,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_VERBOSE => false,
            CURLOPT_HEADER => false,
            CURLOPT_FORBID_REUSE => true,
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptions);
        $result = curl_exec($curl);
        
        $retorno =  json_decode($result, true);

        return $retorno['data']['results'];
    }

}
