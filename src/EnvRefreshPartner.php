<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug;

use Przeslijmi\AgileData\Configure\EnvRefreshPartnerInterface;
use Przeslijmi\AgileData\Tools\JsonSettings as Json;
use Przeslijmi\AgileDataWfrSystemPlug\SilosProvider;
use Przeslijmi\AgileDataWfrSystemPlug\ViewsProvider;
use stdClass;

/**
 * Called every time when env variables are refreshed.
 */
class EnvRefreshPartner implements EnvRefreshPartnerInterface
{

    /**
     * Nothing to do on start.
     *
     * @return void
     */
    public function onStart(): void
    {
    }

    /**
     * Add siloses to plug on end.
     *
     * @return void
     */
    public function onEnd(): void
    {

        // Get list of silos.
        $wfrSilos = array_merge(
            SilosProvider::provide(),
            ViewsProvider::provide()
        );

        // Add siloses to current plug.
        $dataPlugUri = ( $_ENV['PRZESLIJMI_AGILEDATA_DATA_PLUG_URI'] ?? '' );
        $dataPlug    = ( ( empty($dataPlugUri) === false ) ? json_decode(file_get_contents($dataPlugUri)) : null );

        // Proceed if plug is not empty.
        if (empty($dataPlug) === false) {

            // Delete all siloses from this provider.
            foreach (( $dataPlug->silos ?? [] ) as $siloKey => $silo) {
                if (( $silo->class->provider ?? '' ) === SilosProvider::class) {
                    unset($dataPlug->silos->{$siloKey});
                }
            }

            // Add siloses.
            $dataPlug->silos = (object) array_merge((array) $dataPlug->silos, $wfrSilos);

            // Compose file contents.
            $plugFileContents = json_encode($dataPlug, Json::stdWrite());

            // Save.
            file_put_contents($dataPlugUri, $plugFileContents);
        }
    }
}
