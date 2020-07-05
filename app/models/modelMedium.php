<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class modelMedium extends Model
{
    public static function getAllArtikel()
    {
        $artikel                =   DB::table('artikel')->get();
        return $artikel;
    }

    public static function saveArtikel($data)
    {

        //dd($data);

        // $artikel_save           =   [$data['judul_artikel'],$data['isi_artikel'],$data['id_user']];
        // //dd($artikel_save);
        $judul_artikel          =   $data['judul_artikel'];
        $isi_artikel            =   $data['isi_artikel'];
        $slug_artikel           =   Str::slug($data['judul_artikel']);
        $tags_1                 =   $data['nama_tags_1'];
        $tags_2                 =   $data['nama_tags_2'];
        $id_user                =   $data['id_user'];

        $artikel                =   DB::table('artikel')->insert
                                    ([[
                                    'judul_artikel'      =>  $judul_artikel,
                                    'isi_artikel'       =>  $isi_artikel,
                                    'slug_artikel'      =>  $slug_artikel,
                                    'id_user'           =>  $id_user,
                                    'tags_artikel_1'    =>  $tags_1,
                                    'tags_artikel_2'    =>  $tags_2
                                    ]]);

        return $artikel;
    }

    public static function findArtikel($id_cari)
    {
        $artikel                =   DB::table('artikel')->where('id_artikel',$id_cari)->first();
        return $artikel;
    }

    public static function updateArtikel($id_cari,$request)
    {

        $slug_artikel           =   Str::slug($request['judul_artikel']);

        $artikel                =   DB::table('artikel')->where('id_artikel',$id_cari)->update
                                    (
                                        [
                                            'judul_artikel'     =>  $request['judul_artikel'],
                                            'isi_artikel'       =>  $request['isi_artikel'],
                                            'slug_artikel'      =>  $slug_artikel,
                                            'id_user'           =>  $request['id_user'],
                                            'tags_artikel_1'    =>  $request['nama_tags_1'],
                                            'tags_artikel_2'    =>  $request['nama_tags_2']
                                        ]
                                    );

        return $artikel;
    }

    public static function deleteArtikel($id_cari)
    {
        $deleted_artikel        =   DB::table('artikel')->where('id_artikel',$id_cari)->delete();

        return $deleted_artikel;
    }
}
