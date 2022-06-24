<?php


namespace App\Dao;

use App\Exceptions\MonException;
use DB;
use Illuminate\Support\Facades\Session;

class ServiceStar
{
    public function getListeStar()
    {
        /*Requète en Eloquent qui recupère toutes les informations stockés dans la table fiche-star*/
        try {
            $mesStars = DB::table('fiche-star')
                ->select()
                ->get();
            return $mesStars;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
