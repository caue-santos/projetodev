<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MarvelAPIController;
use Illuminate\Support\Facades\View;

class HeroiController extends Controller
{

    private $marvelRequests;

    public function __construct()
    {
        $this->marvelRequests = new MarvelAPIController;
    }

    public function getPersonagemInfo($char)
    {
        $result = $this->marvelRequests->buscaHeroi($char);

        $name = $result['data']['results'][0]['name'];
        $info = $result['data']['results'][0]['description'];
        $img = $result['data']['results'][0]['thumbnail']['path'];
        $imgEx = $result['data']['results'][0]['thumbnail']['extension'];
        $id = $result['data']['results'][0]['id'];

        $historia = $this->marvelRequests->buscaHistoriasChar($id);
        $hist0 = $historia[0];
        $hist1 = $historia[1];
        $hist2 = $historia[2];
        $hist3 = $historia[3];
        $hist4 = $historia[4];

        $finalHist0 = $this->marvelRequests->storieById($hist0['id']);
        $finalHist1 = $this->marvelRequests->storieById($hist1['id']);
        $finalHist2 = $this->marvelRequests->storieById($hist2['id']);
        $finalHist3 = $this->marvelRequests->storieById($hist3['id']);
        $finalHist4 = $this->marvelRequests->storieById($hist4['id']);

        return view('personagem', array('nome' => $name, 'info' => $info, 'img' => $img.'.'.$imgEx, 'finalHist0' => $finalHist0[0], 'finalHist1' => $finalHist1[0], 'finalHist2' => $finalHist2[0], 'finalHist3' => $finalHist3[0], 'finalHist4' => $finalHist4[0]));

    }

    public function getRocket()
    {
        $obj = new HeroiController;
        $result = $obj->getPersonagemInfo('rocket');

        return $result;
    }

    public function getDaredevil()
    {
        $obj = new HeroiController;
        $result = $obj->getPersonagemInfo('daredevil');

        return $result;   
    }

    public function getIronMan()
    {
        $obj = new HeroiController;
        $result = $obj->getPersonagemInfo('iron%man');

        return $result;   
    }

}