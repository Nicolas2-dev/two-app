<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer tous les itinéraires pour le module.
| C'est un jeu d'enfant. Dites simplement à Two les URI auxquels il doit répondre
| et donnez-lui la fermeture à exécuter lorsque cet URI est demandé.
|
*/


Route::group(array('prefix' => 'two_core'), function ()
{
    Route::get('/', function ()
    {
        dd('Il s\'agit de la page d\'index du Module TwoCore.');
    });
});
