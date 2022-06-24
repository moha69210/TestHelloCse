<?php


namespace App\Http\Controllers;

use App\Dao\ServiceStar;

class StarController
{

    public function listerFicheStar()
    {
        try {
            /* Création d'un objet ServiceStar*/
            $unServiceStar = new ServiceStar();
            /* Appel de la fonction getListeStar qui recupère les informations des stars dans la base de données*/
            $mesStars = $unServiceStar->getListeStar();
            /*Redirection vers la page BackOffice, avec la collection mesStars contenant les informations de chaque star*/
            return view('vues/backOffice', compact('mesStars'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        } catch (\Exception $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        }
    }

    public function ajouterFicheStar()
    {
        try {
            /* Création d'un objet ServiceStar*/
            $unServiceStar = new ServiceStar();
            /* Appel de la fonction getListeStar qui recupère les informations des stars dans la base de données*/
            $mesStars = $unServiceStar->getListeStar();
            /*Redirection vers la page BackOffice, avec la collection mesStars contenant les informations de chaque star*/
            return view('vues/backOffice', compact('mesStars'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        } catch (\Exception $e) {
            $erreur = $e->getMessage();
            return view('vues/error', compact('erreur'));
        }
    }
}
