<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\modelMedium;

class ControllerArtikel extends Controller
{
    public function showErd()
    {
        return view('/items/erd');
    }


    public function index()
    {
        $artikel                =   modelMedium::getAllArtikel();
        //dd($artikel);
        return view('/items/artikelView',compact('artikel'));
    }

    public function createFormArtikel()
    {
        return view('/items/formsArtikel');
    }

    public function storeArtikel(Request $request)
    {
        $data_request           =   $request->all();
        unset($data_request['_token']);

        $artikel                =   modelMedium::saveArtikel($data_request);

        if($artikel)
        {
            return redirect('/artikel');
        }
    }

    public function editArtikel($id_cari)
    {
        $artikel                =   modelMedium::findArtikel($id_cari);
        return view('/items/formArtikelEdit',compact('artikel'));
    }

    public function detailArtikel($id_cari)
    {
        $artikel                =   modelMedium::findArtikel($id_cari);
        //dd($artikel);
        return view('/items/artikelViewDetail',compact('artikel'));
    }

    public function updateArtikel($id_cari, Request $request)
    {
        $artikel                =   modelMedium::updateArtikel($id_cari,$request->all());
        return redirect('/artikel');
    }

    public function deleteArtikel($id_cari)
    {
        $delete_artikel         =   modelMedium::deleteArtikel($id_cari);

        return redirect('/artikel');
    }
}
