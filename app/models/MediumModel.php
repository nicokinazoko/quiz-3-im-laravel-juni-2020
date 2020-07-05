<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class modelMedium extends Model
{
    public static function getAllArtikel()
    {
        $artikel                =   DB::table('artikel');
        return $artikel;
    }

    public static function saveArtikel($data)
    {

    }
}
