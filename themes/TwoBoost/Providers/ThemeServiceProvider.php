<?php

namespace Themes\TwoBoost\Providers;

use Two\Packages\Providers\ThemeServiceProvider as ServiceProvider;


class ThemeServiceProvider extends ServiceProvider
{

    /**
     * Amorcez les événements d’application.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__ .'/../');

        // Configurez le package.
        $this->package('Themes/TwoBoost', 'two_boost', $path);

        // Amorcez le thème.
        require $path .DS .'Bootstrap.php';
    }

    /**
     * Enregistrez le fournisseur de services thématiques TwoBoost.
     *
     * Ce fournisseur de services est un endroit pratique pour enregistrer vos thèmes
     * services dans le conteneur IoC. Si vous le souhaitez, vous pouvez faire des compléments
     * méthodes ou prestataires de services pour garder le code plus ciblé et plus granulaire.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        //
    }

}
